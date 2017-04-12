<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Domain\Repositories\AbstractRepository;

class FakeRepository extends AbstractRepository
{
	public function __construct($modelMockery)
	{
		$this->model = $modelMockery;
	}
}

class AbstractRepositoryTest extends TestCase
{
	public function setUp()
	{
		parent::setUp();

		$this->modelMock = Mockery::mock('stdClass');
		$this->repositoryFake = new FakeRepository($this->modelMock);
	}

    public function testLoad()
    {
    	$this->modelMock
    		->shouldReceive('with')
    		->with([1, 2])
    		->once()
    		->andReturnSelf();

    	$this->repositoryFake->load([1, 2]);
        $this->assertEquals($this->modelMock, $this->repositoryFake->make());
    }

    public function testAll()
    {
    	$this->modelMock
    		->shouldReceive('with')
    		->andReturnSelf()

    		->shouldReceive('get')
    		->with(['*'])
    		->andReturn(true);

    	$this->assertTrue($this->repositoryFake->all());
    }

    public function testAllWithOthersColumns()
    {
    	$this->modelMock
    		->shouldReceive('with')
    		->andReturnSelf()

    		->shouldReceive('get')
    		->with(['name'])
    		->andReturn(true);

    	$this->assertTrue($this->repositoryFake->all(['name']));
    }

    public function testFind()
    {
        $this->modelMock
            ->shouldReceive('with')
            ->andReturnSelf()

            ->shouldReceive('find')
            ->with(Mockery::any(), ['*'])
            ->andReturn(true);

        $this->assertTrue($this->repositoryFake->find(1));
    }

    public function testLikeSearch()
    {
        $this->modelMock
            ->shouldReceive('with')
            ->andReturnSelf()

            ->shouldReceive('where')
            ->with(Mockery::any(), 'like', Mockery::any())
            ->andReturnSelf()

            ->shouldReceive('paginate')
            ->with(10, ['*'])
            ->andReturn(true);

        $this->assertTrue( $this->repositoryFake->likeSearch('key', 'value') );
        $this->assertTrue( $this->repositoryFake->paginate(10, 1, ['*'], 'key') ); // Can call the likeSearch function (?)
    }

    public function testCreate()
    {
    	$this->modelMock
    		->shouldReceive('create')
    		->andReturn(true);

        $response = $this->repositoryFake->create(['name' => 'Name']);
        
        $this->assertInstanceOf(Illuminate\Http\JsonResponse::class, $response);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertTrue(json_decode($response->getContent())->created);
    }

    public function testCreateFail()
    {
        $this->modelMock
            ->shouldReceive('create')
            ->andReturn(false);

        $response = $this->repositoryFake->create(['name' => 'Name']);

        $this->assertInstanceOf(Illuminate\Http\JsonResponse::class, $response);
        $this->assertEquals(500, $response->getStatusCode());
        $this->assertFalse(json_decode($response->getContent())->created);
    }

    public function testUpdate()
    {
    	$this->modelMock
            ->shouldReceive('with')
            ->andReturnSelf()

    		->shouldReceive('find')
    		->andReturnSelf()

    		->shouldReceive('fill')
    		->andReturnSelf()

    		->shouldReceive('save')
    		->andReturn(true);

        $response = $this->repositoryFake->update(1, ['name', 'Name']);
        
        $this->assertInstanceOf(Illuminate\Http\JsonResponse::class, $response);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertTrue(json_decode($response->getContent())->updated);
    }

    public function testUpdateFail()
    {
    	$this->modelMock
            ->shouldReceive('with')
            ->andReturnSelf()

    		->shouldReceive('find')
    		->andReturnSelf()

    		->shouldReceive('fill')
    		->andReturnSelf()

    		->shouldReceive('save')
    		->andReturn(false);

        $response = $this->repositoryFake->update(1, ['name' => 'Name']);
        $this->assertInstanceOf(Illuminate\Http\JsonResponse::class, $response);
        $this->assertEquals(500, $response->getStatusCode());
        $this->assertFalse(json_decode($response->getContent())->updated);
    }

    public function testDelete()
    {
    	$this->modelMock
            ->shouldReceive('with')
            ->andReturnSelf()

    		->shouldReceive('find')
    		->andReturnSelf()

    		->shouldReceive('delete')
    		->andReturn(true);

        $response = $this->repositoryFake->delete(1);
        $this->assertInstanceOf(Illuminate\Http\JsonResponse::class, $response);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertTrue(json_decode($response->getContent())->deleted);
    }

    public function testDeleteFail()
    {
    	$this->modelMock
            ->shouldReceive('with')
            ->andReturnSelf()

    		->shouldReceive('find')
    		->andReturn(null);

        $response = $this->repositoryFake->delete(1);

        $this->assertInstanceOf(Illuminate\Http\JsonResponse::class, $response);
        $this->assertEquals(200, $response->getStatusCode()); // Delete Fail is 200 Status Code (?)
        $this->assertFalse(json_decode($response->getContent())->deleted);
    }

    public function testInstance()
    {
        $this->modelMock
            ->shouldReceive('newInstance')
            ->andReturnSelf();

        $this->assertInstanceOf(stdClass::class, $this->repositoryFake->instance());
    }
}
