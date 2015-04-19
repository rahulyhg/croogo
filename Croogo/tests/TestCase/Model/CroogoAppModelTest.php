<?php
namespace Croogo\Croogo\Test\TestCase\Model;

use App\Controller\Component\AuthComponent;
use App\Model\Model;
use App\Model\User;
use Croogo\Model\CroogoAppModel;
use Croogo\Croogo\TestSuite\CroogoTestCase;
/**
 * CroogoAppModelTest file
 *
 * This file is to test the CroogoAppModel
 *
 * @category Test
 * @package  Croogo
 * @version  1.0
 * @author   Fahad Ibnay Heylaal <contact@fahad19.com>
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://www.croogo.org
 */
class CroogoAppModelTest extends CroogoTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.croogo\users.aco',
		'plugin.croogo\users.aro',
		'plugin.croogo\users.aros_aco',
		'plugin.croogo\users.role',
		'plugin.croogo\users.user',
		'plugin.croogo\settings.setting',
	);

/**
 * User instance
 *
 * @var TestUser
 */
	public $User;

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
//		$this->User = ClassRegistry::init('Users.User');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		parent::tearDown();
		unset($this->User);
	}

/**
 * testValidName
 */
	public function testValidName() {
		$this->markTestIncomplete('This test needs to be ported to CakePHP 3.0');

		$this->assertTrue($this->User->validName(array('name' => 'Kyle')));
		$this->assertFalse($this->User->validName(array('name' => 'what%is@this#i*dont!even')));
	}

/**
 * testValidAlias
 */
	public function testValidAlias() {
		$this->markTestIncomplete('This test needs to be ported to CakePHP 3.0');

		$this->assertTrue($this->User->validAlias(array('name' => 'Kyle')));
		$this->assertFalse($this->User->validAlias(array('name' => 'Not an Alias')));
	}

}
