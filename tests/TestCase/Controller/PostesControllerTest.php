<?php
namespace App\Test\TestCase\Controller;

use App\Controller\PostesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\PostesController Test Case
 */
class PostesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.postes',
        'app.employes',
        'app.civilites',
        'app.langues',
        'app.immeubles',
        'app.formations',
        'app.frequences',
        'app.debut_rappels',
        'app.modalites',
        'app.statuss',
        'app.employes_formations',
        'app.formations_postes'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
