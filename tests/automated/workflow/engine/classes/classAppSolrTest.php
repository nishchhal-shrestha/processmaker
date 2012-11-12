<?php
require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php';
require_once PATH_TRUNK . 'gulliver/system/class.form.php';
require_once PATH_TRUNK . 'gulliver/system/class.dbconnection.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/propel/Propel.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/creole/Creole.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/pear/PEAR.php';
require_once PATH_TRUNK . 'workflow/engine/classes/class.AppSolr.php';

/**
 * Generated by ProcessMaker Test Unit Generator on 2012-07-12 at 22:32:25.
*/

class classAppSolrTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var AppSolr
    */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
    */
    protected function setUp()
    {
        $SolrEnabled = false;
        $SolrHost = 'localhost';
        $SolrInstance = '';
        $this->object = new AppSolr($SolrEnabled, $SolrHost, $SolrInstance);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
    */
    protected function tearDown()
    {
    }

    /**
     * This is the default method to test, if the class still having
     * the same number of methods.
    */
    public function testNumberOfMethodsInThisClass()
    {
        $methods = get_class_methods('AppSolr');
        $this->assertTrue( count($methods) == 28);
    }

    /**
    * @covers AppSolr::__construct
    * @todo   Implement test__construct().
    */
    public function test__construct()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('__construct', $methods ), 'exists method __construct' );
        $r = new ReflectionMethod('AppSolr', '__construct');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'SolrEnabled');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'SolrHost');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->assertTrue( $params[2]->getName() == 'SolrInstance');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == false);
    }

    /**
    * @covers AppSolr::isSolrEnabled
    * @todo   Implement testisSolrEnabled().
    */
    public function testisSolrEnabled()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('isSolrEnabled', $methods ), 'exists method isSolrEnabled' );
        $r = new ReflectionMethod('AppSolr', 'isSolrEnabled');
        $params = $r->getParameters();
    }

    /**
    * @covers AppSolr::getAppGridData
    * @todo   Implement testgetAppGridData().
    */
    public function testgetAppGridData()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getAppGridData', $methods ), 'exists method getAppGridData' );
        $r = new ReflectionMethod('AppSolr', 'getAppGridData');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'userUid');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'start');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == '');
        $this->assertTrue( $params[2]->getName() == 'limit');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == true);
        $this->assertTrue( $params[2]->getDefaultValue() == '');
        $this->assertTrue( $params[3]->getName() == 'action');
        $this->assertTrue( $params[3]->isArray() == false);
        $this->assertTrue( $params[3]->isOptional () == true);
        $this->assertTrue( $params[3]->getDefaultValue() == '');
        $this->assertTrue( $params[4]->getName() == 'filter');
        $this->assertTrue( $params[4]->isArray() == false);
        $this->assertTrue( $params[4]->isOptional () == true);
        $this->assertTrue( $params[4]->getDefaultValue() == '');
        $this->assertTrue( $params[5]->getName() == 'search');
        $this->assertTrue( $params[5]->isArray() == false);
        $this->assertTrue( $params[5]->isOptional () == true);
        $this->assertTrue( $params[5]->getDefaultValue() == '');
        $this->assertTrue( $params[6]->getName() == 'process');
        $this->assertTrue( $params[6]->isArray() == false);
        $this->assertTrue( $params[6]->isOptional () == true);
        $this->assertTrue( $params[6]->getDefaultValue() == '');
        $this->assertTrue( $params[7]->getName() == 'user');
        $this->assertTrue( $params[7]->isArray() == false);
        $this->assertTrue( $params[7]->isOptional () == true);
        $this->assertTrue( $params[7]->getDefaultValue() == '');
        $this->assertTrue( $params[8]->getName() == 'status');
        $this->assertTrue( $params[8]->isArray() == false);
        $this->assertTrue( $params[8]->isOptional () == true);
        $this->assertTrue( $params[8]->getDefaultValue() == '');
        $this->assertTrue( $params[9]->getName() == 'type');
        $this->assertTrue( $params[9]->isArray() == false);
        $this->assertTrue( $params[9]->isOptional () == true);
        $this->assertTrue( $params[9]->getDefaultValue() == '');
        $this->assertTrue( $params[10]->getName() == 'dateFrom');
        $this->assertTrue( $params[10]->isArray() == false);
        $this->assertTrue( $params[10]->isOptional () == true);
        $this->assertTrue( $params[10]->getDefaultValue() == '');
        $this->assertTrue( $params[11]->getName() == 'dateTo');
        $this->assertTrue( $params[11]->isArray() == false);
        $this->assertTrue( $params[11]->isOptional () == true);
        $this->assertTrue( $params[11]->getDefaultValue() == '');
        $this->assertTrue( $params[12]->getName() == 'callback');
        $this->assertTrue( $params[12]->isArray() == false);
        $this->assertTrue( $params[12]->isOptional () == true);
        $this->assertTrue( $params[12]->getDefaultValue() == '');
        $this->assertTrue( $params[13]->getName() == 'dir');
        $this->assertTrue( $params[13]->isArray() == false);
        $this->assertTrue( $params[13]->isOptional () == true);
        $this->assertTrue( $params[13]->getDefaultValue() == '');
        $this->assertTrue( $params[14]->getName() == 'sort');
        $this->assertTrue( $params[14]->isArray() == false);
        $this->assertTrue( $params[14]->isOptional () == true);
        $this->assertTrue( $params[14]->getDefaultValue() == 'APP_CACHE_VIEW.APP_NUMBER');
        $this->assertTrue( $params[15]->getName() == 'doCount');
        $this->assertTrue( $params[15]->isArray() == false);
        $this->assertTrue( $params[15]->isOptional () == true);
        $this->assertTrue( $params[15]->getDefaultValue() == '');
    }

    /**
    * @covers AppSolr::getCasesCount
    * @todo   Implement testgetCasesCount().
    */
    public function testgetCasesCount()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getCasesCount', $methods ), 'exists method getCasesCount' );
        $r = new ReflectionMethod('AppSolr', 'getCasesCount');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'userUid');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers AppSolr::getUserGroups
    * @todo   Implement testgetUserGroups().
    */
    public function testgetUserGroups()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getUserGroups', $methods ), 'exists method getUserGroups' );
        $r = new ReflectionMethod('AppSolr', 'getUserGroups');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'usrUID');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers AppSolr::getAppDelegationData
    * @todo   Implement testgetAppDelegationData().
    */
    public function testgetAppDelegationData()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getAppDelegationData', $methods ), 'exists method getAppDelegationData' );
        $r = new ReflectionMethod('AppSolr', 'getAppDelegationData');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'appUID');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'delIndex');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
    }

    /**
    * @covers AppSolr::getSearchText
    * @todo   Implement testgetSearchText().
    */
    public function testgetSearchText()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getSearchText', $methods ), 'exists method getSearchText' );
        $r = new ReflectionMethod('AppSolr', 'getSearchText');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'plainSearchText');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers AppSolr::getApplicationDelegationsIndex
    * @todo   Implement testgetApplicationDelegationsIndex().
    */
    public function testgetApplicationDelegationsIndex()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getApplicationDelegationsIndex', $methods ), 'exists method getApplicationDelegationsIndex' );
        $r = new ReflectionMethod('AppSolr', 'getApplicationDelegationsIndex');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'appUID');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers AppSolr::updateApplicationSearchIndex
    * @todo   Implement testupdateApplicationSearchIndex().
    */
    public function testupdateApplicationSearchIndex()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('updateApplicationSearchIndex', $methods ), 'exists method updateApplicationSearchIndex' );
        $r = new ReflectionMethod('AppSolr', 'updateApplicationSearchIndex');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'aaAPPUIDs');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers AppSolr::deleteApplicationSearchIndex
    * @todo   Implement testdeleteApplicationSearchIndex().
    */
    public function testdeleteApplicationSearchIndex()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('deleteApplicationSearchIndex', $methods ), 'exists method deleteApplicationSearchIndex' );
        $r = new ReflectionMethod('AppSolr', 'deleteApplicationSearchIndex');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'appUID');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers AppSolr::createSolrXMLDocument
    * @todo   Implement testcreateSolrXMLDocument().
    */
    public function testcreateSolrXMLDocument()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('createSolrXMLDocument', $methods ), 'exists method createSolrXMLDocument' );
        $r = new ReflectionMethod('AppSolr', 'createSolrXMLDocument');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'aaAPPUIDs');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers AppSolr::buildSearchIndexDocumentPMOS2
    * @todo   Implement testbuildSearchIndexDocumentPMOS2().
    */
    public function testbuildSearchIndexDocumentPMOS2()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('buildSearchIndexDocumentPMOS2', $methods ), 'exists method buildSearchIndexDocumentPMOS2' );
        $r = new ReflectionMethod('AppSolr', 'buildSearchIndexDocumentPMOS2');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'documentData');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'dynaformFieldTypes');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->assertTrue( $params[2]->getName() == 'lastUpdateDate');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == false);
        $this->assertTrue( $params[3]->getName() == 'maxPriority');
        $this->assertTrue( $params[3]->isArray() == false);
        $this->assertTrue( $params[3]->isOptional () == false);
        $this->assertTrue( $params[4]->getName() == 'assignedUsers');
        $this->assertTrue( $params[4]->isArray() == false);
        $this->assertTrue( $params[4]->isOptional () == false);
        $this->assertTrue( $params[5]->getName() == 'assignedUsersRead');
        $this->assertTrue( $params[5]->isArray() == false);
        $this->assertTrue( $params[5]->isOptional () == false);
        $this->assertTrue( $params[6]->getName() == 'assignedUsersUnread');
        $this->assertTrue( $params[6]->isArray() == false);
        $this->assertTrue( $params[6]->isOptional () == false);
        $this->assertTrue( $params[7]->getName() == 'draftUser');
        $this->assertTrue( $params[7]->isArray() == false);
        $this->assertTrue( $params[7]->isOptional () == false);
        $this->assertTrue( $params[8]->getName() == 'participatedUsers');
        $this->assertTrue( $params[8]->isArray() == false);
        $this->assertTrue( $params[8]->isOptional () == false);
        $this->assertTrue( $params[9]->getName() == 'participatedUsersStartedByUser');
        $this->assertTrue( $params[9]->isArray() == false);
        $this->assertTrue( $params[9]->isOptional () == false);
        $this->assertTrue( $params[10]->getName() == 'participatedUsersCompletedByUser');
        $this->assertTrue( $params[10]->isArray() == false);
        $this->assertTrue( $params[10]->isOptional () == false);
        $this->assertTrue( $params[11]->getName() == 'unassignedUsers');
        $this->assertTrue( $params[11]->isArray() == false);
        $this->assertTrue( $params[11]->isOptional () == false);
        $this->assertTrue( $params[12]->getName() == 'unassignedGroups');
        $this->assertTrue( $params[12]->isArray() == false);
        $this->assertTrue( $params[12]->isOptional () == false);
    }

    /**
    * @covers AppSolr::getApplicationIndexData
    * @todo   Implement testgetApplicationIndexData().
    */
    public function testgetApplicationIndexData()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getApplicationIndexData', $methods ), 'exists method getApplicationIndexData' );
        $r = new ReflectionMethod('AppSolr', 'getApplicationIndexData');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'AppUID');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers AppSolr::aaGetMaximun
    * @todo   Implement testaaGetMaximun().
    */
    public function testaaGetMaximun()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('aaGetMaximun', $methods ), 'exists method aaGetMaximun' );
        $r = new ReflectionMethod('AppSolr', 'aaGetMaximun');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'arr');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'column');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->assertTrue( $params[2]->getName() == 'columnType');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == true);
        $this->assertTrue( $params[2]->getDefaultValue() == 'STRING');
        $this->assertTrue( $params[3]->getName() == 'columnCondition');
        $this->assertTrue( $params[3]->isArray() == false);
        $this->assertTrue( $params[3]->isOptional () == true);
        $this->assertTrue( $params[3]->getDefaultValue() == '');
        $this->assertTrue( $params[4]->getName() == 'condition');
        $this->assertTrue( $params[4]->isArray() == false);
        $this->assertTrue( $params[4]->isOptional () == true);
        $this->assertTrue( $params[4]->getDefaultValue() == '');
    }

    /**
    * @covers AppSolr::aaGetMinimun
    * @todo   Implement testaaGetMinimun().
    */
    public function testaaGetMinimun()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('aaGetMinimun', $methods ), 'exists method aaGetMinimun' );
        $r = new ReflectionMethod('AppSolr', 'aaGetMinimun');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'arr');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'column');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->assertTrue( $params[2]->getName() == 'columnType');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == true);
        $this->assertTrue( $params[2]->getDefaultValue() == 'STRING');
        $this->assertTrue( $params[3]->getName() == 'columnCondition');
        $this->assertTrue( $params[3]->isArray() == false);
        $this->assertTrue( $params[3]->isOptional () == true);
        $this->assertTrue( $params[3]->getDefaultValue() == '');
        $this->assertTrue( $params[4]->getName() == 'condition');
        $this->assertTrue( $params[4]->isArray() == false);
        $this->assertTrue( $params[4]->isOptional () == true);
        $this->assertTrue( $params[4]->getDefaultValue() == '');
    }

    /**
    * @covers AppSolr::aaSearchRecords
    * @todo   Implement testaaSearchRecords().
    */
    public function testaaSearchRecords()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('aaSearchRecords', $methods ), 'exists method aaSearchRecords' );
        $r = new ReflectionMethod('AppSolr', 'aaSearchRecords');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'arr');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'andColumnsConditions');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
    }

    /**
    * @covers AppSolr::getApplicationDelegationData
    * @todo   Implement testgetApplicationDelegationData().
    */
    public function testgetApplicationDelegationData()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getApplicationDelegationData', $methods ), 'exists method getApplicationDelegationData' );
        $r = new ReflectionMethod('AppSolr', 'getApplicationDelegationData');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'AppUID');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers AppSolr::getTaskUnassignedUsersGroupsData
    * @todo   Implement testgetTaskUnassignedUsersGroupsData().
    */
    public function testgetTaskUnassignedUsersGroupsData()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getTaskUnassignedUsersGroupsData', $methods ), 'exists method getTaskUnassignedUsersGroupsData' );
        $r = new ReflectionMethod('AppSolr', 'getTaskUnassignedUsersGroupsData');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'ProUID');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'TaskUID');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
    }

    /**
    * @covers AppSolr::getProcessDynaformFileNames
    * @todo   Implement testgetProcessDynaformFileNames().
    */
    public function testgetProcessDynaformFileNames()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getProcessDynaformFileNames', $methods ), 'exists method getProcessDynaformFileNames' );
        $r = new ReflectionMethod('AppSolr', 'getProcessDynaformFileNames');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'ProUID');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers AppSolr::applicationChangedUpdateSolrQueue
    * @todo   Implement testapplicationChangedUpdateSolrQueue().
    */
    public function testapplicationChangedUpdateSolrQueue()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('applicationChangedUpdateSolrQueue', $methods ), 'exists method applicationChangedUpdateSolrQueue' );
        $r = new ReflectionMethod('AppSolr', 'applicationChangedUpdateSolrQueue');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'AppUid');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'updated');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
    }

    /**
    * @covers AppSolr::synchronizePendingApplications
    * @todo   Implement testsynchronizePendingApplications().
    */
    public function testsynchronizePendingApplications()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('synchronizePendingApplications', $methods ), 'exists method synchronizePendingApplications' );
        $r = new ReflectionMethod('AppSolr', 'synchronizePendingApplications');
        $params = $r->getParameters();
    }

    /**
    * @covers AppSolr::getCountApplicationsPMOS2
    * @todo   Implement testgetCountApplicationsPMOS2().
    */
    public function testgetCountApplicationsPMOS2()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getCountApplicationsPMOS2', $methods ), 'exists method getCountApplicationsPMOS2' );
        $r = new ReflectionMethod('AppSolr', 'getCountApplicationsPMOS2');
        $params = $r->getParameters();
    }

    /**
    * @covers AppSolr::getCountApplicationsSearchIndex
    * @todo   Implement testgetCountApplicationsSearchIndex().
    */
    public function testgetCountApplicationsSearchIndex()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getCountApplicationsSearchIndex', $methods ), 'exists method getCountApplicationsSearchIndex' );
        $r = new ReflectionMethod('AppSolr', 'getCountApplicationsSearchIndex');
        $params = $r->getParameters();
    }

    /**
    * @covers AppSolr::getPagedApplicationUids
    * @todo   Implement testgetPagedApplicationUids().
    */
    public function testgetPagedApplicationUids()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getPagedApplicationUids', $methods ), 'exists method getPagedApplicationUids' );
        $r = new ReflectionMethod('AppSolr', 'getPagedApplicationUids');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'skip');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'pagesize');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
    }

    /**
    * @covers AppSolr::reindexAllApplications
    * @todo   Implement testreindexAllApplications().
    */
    public function testreindexAllApplications()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('reindexAllApplications', $methods ), 'exists method reindexAllApplications' );
        $r = new ReflectionMethod('AppSolr', 'reindexAllApplications');
        $params = $r->getParameters();
    }

  }