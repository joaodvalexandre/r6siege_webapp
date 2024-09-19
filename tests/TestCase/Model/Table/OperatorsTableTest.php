<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OperatorsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OperatorsTable Test Case
 */
class OperatorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OperatorsTable
     */
    protected $Operators;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Operators',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Operators') ? [] : ['className' => OperatorsTable::class];
        $this->Operators = $this->getTableLocator()->get('Operators', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Operators);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\OperatorsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
