<?php
class Sitemap extends AbstractController{
    function init(){
        parent::init();
        $doc=array('Documentation');
//{{{ learn - Learning
        $doc['learn']=array('Learning',

            'intro'=>'What is Object-Oriented Web Development?',

            'install'=>array(
                'Installing Agile Toolkit',
                'lamp'=>'Installing LAMP',
                'deploy'=>'Download and Deploy',
                'how'=>'How Agile Toolkit Works?',
                'dir'=>'Directory Structure',
                'config'=>'Configuration File',
                'db'=>'Database Connection',
                'auth'=>'Authorization',
                'git'=>'Use with Git and SVN',
                'dbupdate'=>'SQL upgrade tracking',
                ),

            'understand'=>array(
                'Understanding Agille Toolkit',
                'base'=>array(
                    'Coding Style of Agile Toolkit',
                    'adding'=>'Adding Objects',
                    'chains'=>'Chaining Calls',
                    'simplicity'=>'What PHP features are not used',
                    'oop'=>'What you do need do know?',
                    'example'=>'The Example',
                    ),
                'page'=>array(
                    'Pages, Routing and Linking',
                    'route'=>'Determining current page',
                    'link'=>'Building links to pages',
                    'add'=>'Adding more pages',
                    'misc'=>'Best Practices and Misc. info',
                    ),
                'api'=>array(
                    'API Classes',
                    'what'=>'Purpose of API Class',
                    'exec'=>'Application Execution Steps',
                    'multi'=>'Multiple Interface Apps',
                    ),
                'view'=>array(
                    'Views',
                    'example'=>'Examples of Simple Views',
                    'usage'=>'How to use Views',
                    'interactive'=>'Interactive AJAX views',
                    ),
                'model'=>array(
                    'Models',
                    'intro'=>'Introduction to Models',
                    'add'=>'Creating your first Model',
                    'db'=>'Database Considerations',
                    'calculated'=>'Calculated Fields',
                    'relations'=>'Relations betwene models and tables',
                    'actions'=>'Adding actions (behavor)',
                    'debug'=>'Debugging models',
                    ),
                'controller'=>'Controllers',
                'chains'=>array(
                    'JavaScript Chains',
                    'intro'=>'Introduction to Chains',
                    'bind'=>'Binding Chains',
                    'enclose'=>'Enclosing chains',
                    'multi'=>'Using multiple chains',
                    'own'=>'Callinng your own code',
                    'customize'=>'Customizing selectors and triggers',
                    ),
                'jsapi'=>array(
                    'JavaScript API',
                    'scructure'=>'Rich web apps with thin client',
					'start'=>'JavaScript bootstraping sequence',
					'univ'=>'Agile Toolkit Univ chain',
					'widgets'=>'Bundled widgets',
					'add'=>'Adding your own widgets',
					'import'=>'Using 3rd party plugins',
                    ),
                ),
			'agile'=>'Why Agile Toolkit is Agile?',
			'app'=>array(
				'Pratcical Guide to your First Application',
				'planning'=>'Requirements!? What requirements?',
				//'code'=>'Good code VS Bad code',
				'models'=>'Adding Models',
				'interface'=>'Front-end, Back-end and config',
				'pages'=>'Mashing up Web Application',
				'changes'=>'Handling Change Requests',
				'tests'=>'Adding Unit Tests',
				'deploy'=>'Deploying to Production',
				'performance'=>'Optimizing performance',
			),

            'template'=>array(
                'Templates and Rendering',
                'css'=>'Cascading Stylesheets',
                'how'=>'Introduction to Templates',
                'view'=>'Creating View with your own template',
                'page'=>'Adding pages with custom templates',
                'api'=>'Changing shared template of application',
                ),

            'share'=>array(
                'Sharing code',
                'contribute'=>'Contributing to atk4-addons',
                'projects'=>'Sharing code between your own projects',
                'purchase'=>'Purchasing 3rd party code',
                ),
            'tutorial'=>array('Tutorials',
                'jobeet'=>array('Jobeet - Practical Project on Agile Toolkit',
                    'day1'=>'Day 1: The Agile Toolkit',
                    'day2'=>'Day 2: About Jobeet',
                    'day3'=>'Day 3: The Data Model',
                    'day4'=>'Day 4: Controller and View',
                    'day5'=>'Day 5: The Routing',
                    'day6'=>'Day 6: More with Models',
                    'day7'=>'Day 7: Category Page',
                    'day8'=>'Day 8: The Form',
                    'day9'=>'Day 8: The Admin System',
                    ),
                'make-addon'=>'Guide to making your own addon',
                'Customizing URLs (routing)',
                'Manipulating themes',
                'tools'=>array('Tools',
                    'gensql'=>'Generate SQL for your model',
                    'update'=>'Database Schema Migration',
                    ),
                ),
            );
/*}}}*/
//{{{ core - Agile Toolkit Core Concepts
        $doc['doc']=array('Agile Toolkit API Reference',
            'api'=>array(
                'API Classes',
                'frontend'=>'ApiFrontend',
                'cli'=>'ApiCLI',
                'web'=>'ApiWeb',
                'extending'=>'Adding your own Application Class',
                ),
            'page'=>array(
                'Page Classes',
                'adding'=>'Different ways of adding pages',
                'relative'=>'Relative page URL generation',
                'sub'=>'Sub-pages',
                'wizard'=>'Wizards',
                'tabs'=>'Pages with Tabs',
                'static'=>'Static pages',
                '404'=>'PageNotFound handler (404)',
                ),
            'view'=>array(
                'View Classes',
                'abstract'=>'View and AbstractView',
                'helloworld'=>'HelloWorld',
                'loremipsum'=>'LoremIpsum',
                'htmlelement'=>'HTMLElement',
                'button'=>'Buttons',
                'typography'=>'Headings and Paragraphs',
                'add'=>'Adding your own',
                ),
            'model'=>array(
                'Models and Controllers',
                'add'=>'Creating sample models',
                'naming'=>'Suggested field naming',
                'extend'=>'Extending Models',
                'conditions'=>'Conditions and Master Fields',
                'calculated'=>'Defining calculated fields',
                'relations'=>'Relative fields',
                'join'=>'Joining Tables',
                'orm'=>'Loading and saving records (ORM)',
                'queries'=>'Retrieving multi row data',
                'dsql'=>'Generating custom SQL',
                'defaultactions'=>'Modifying default actions',
                'newactions'=>'Adding new actions',
                ),
            'controller'=>array(
                'Controller Classes',
                'why'=>'Purpose of Controllers',
                'multimodel'=>'Multi-model Controller',
                'view'=>array(
                    'View Controllers',
                    'view'=>'View',
                    'grid'=>'Grid',
                    'form'=>'Form',
                    'tree'=>'Tree',
                    'add'=>'Adding View Controllers',
                    ),
                'api'=>array(
                    'API Controllers (4.2)',
                    'config'=>'Config',
                    'logger'=>'Logger',
                    'add'=>'Adding API Controllers',
                    ),
                'model'=>array(
                    'Model Controllers',
                    'sql'=>'SQL (4.2)',
                    'mongo'=>'Mongo (4.2)',
                    ),
                ),
            'dsql'=>array(
                'Dynamic Queries',
                'how'=>'How to use',
                'where'=>'Conditions',
                'field'=>'Fields',
                'join'=>'Joins',
                '...',
                'extend'=>'Extending',
                ),
            'auth'=>array(
                'Authentication',
                'basic'=>'Basic Authentication class',
                'sql'=>'Authentication with SQL',
                'dsql'=>'Enhancing auth SQL query',
                'get'=>'Retrieving Auth data from session',
                'field'=>'Storing additional Auth data',
                'login'=>'Custom login form',
                'allow'=>'Page white and black lists',
                ),
            'exception'=>array(
                'Exceptions',
                'how'=>'How to use',
                'type'=>'Exception types',
                'stopinit'=>'StopInit',
                'stoprender'=>'StopRender',
                ),
            'session'=>array(
                'Session properties',
                ),
            'form'=>array('Basic Form',
                'how'=>'How form works?',
                'fields'=>'Adding Fields',
                'validation'=>'Validation',
                'submit'=>'Handling Submit',
                'database'=>'Database Integration',
                'model'=>'Using with Models',
                'layout'=>'Styling and Layout',
                'enhancing'=>'Enhancing Forms',
                'uploads'=>'File Uploads',
                'extending'=>'Extending',
                'ajax'=>array(
                    'AJAX support',
                    'Reloading fields',
                    'Showing error messages',
                    '...',
                    ),
                ),
            'grid'=>array(
                'Grid',
                'grid/how'=>'How to use',
                'grid/columns'=>'Standard Columns',
                'grid/dynamic'=>'Dynamic Elements',
                'grid/helper'=>array(
                    'Grid Helpers',
                    'grid/helper/quicksearch'=>'Quick Search',
                    'grid/helper/paginator'=>'Paginator',
                    'grid/helper/export'=>'Export',
                    'grid/helper/select'=>'Selectable rows',
                    ),
                'grid/model'=>'Using with Models',
                'grid/sort'=>'Sorting controls',
                'Ordering rows',
                ),
            'lister'=>array(
                'Lister',
                'lister/how'=>'How to use',
                ),
                'lister/complete'=>'CompleteLister',
            'filter'=>array(
                'Filter',
                'filter/how'=>'How to use',
                'filter/quicksearch'=>'QuickSearch',
                ),
            'box'=>array(
                'Containers',
                'frame'=>'Frame',
                'infobox'=>'Info Box',
                'errorbox'=>'Error box',
                'Tabs',
                'Accordion',
                'Hint',
                ),
            'misc'=>array(
                'Misc',
                'SimpleCheckbox',
                ),
            'pathfinder'=>array(
                'Adding Addons with PathFinder',
                'how'=>'How to use',
                'resource'=>'Default Resource Types',
                'location'=>'Adding location',
                'locate'=>'Locating files',
                ),
            'html'=>array(
                'HTML Styling and Enhancing',
                'skin'=>array(
                    'Skins',
                    'how'=>'How to use',
                    'custom'=>'Customizing existing skins',
                    'new'=>array(
                        'Creating new skin',
                        'Required tags',
                        ),
                    'core'=>array(
                        '"core" skin',
                        'css'=>array(
                            'Cascading Stylesheets',
                            'add'=>'Adding your local CSS additions',
                            '960'=>'960gs',
                            'typography'=>'Typography',
                            ),
                        'logo'=>'Changing Logo',
                        'menu'=>'Defining Menus',
                        'icons'=>'Icons',
                        ),
                    'jui'=>'"jui" skin (based on "core")',
                    'agile'=>'"agile" skin (based on "core")',
                    ),
                'template'=>array(
                    'SMLite Templates',
                    'how'=>'How to use',
                    'load'=>'Loading templates',
                    'clone'=>'Cloning templates',
                    'tags'=>'Manipulating tags and regions',
                    'each'=>'Processing each tag',
                    ),
                'head'=>'Dynamically adding code into html/head',
                'testing'=>'UI Testing',
                ),
            'js'=>array(
                'JavaScript Classes',
                'atkstart'=>'atk4 Startup sequence',
                'ready'=>'AJAX-compliant ready-check funciton',
                'loader'=>'ATK4 Loader',
                'form'=>'ATK4 Form',
                'grid'=>'ATK4 Grid',
                'inline'=>'ATK4 Inline',
                'checkbox'=>'ATK4 Checkboxes',
                'expander'=>'ATK4 Expander',
                'menu'=>'ATK4 Menu',
                'notify'=>'ATK4 Notify',
                'ref'=>'ATK4 Reference',
                'uploader'=>'ATK4 Uploader',
                ),
            'live'=>array(
                'Deployment to Live Production',
                'logger'=>array(
                    'Error reporting and logging',
                    'level'=>'log detail level',
                    'debug'=>'generating debug info',
                    'alerts'=>'emailing log errors',
                    'maintenance'=>'maintenance mode',
                    ),
                'dbupdates'=>array(
                    'Database upgrades',
                    'how'=>'How to use',
                    ),
                'helpers'=>array(
                    'Helpers',
                    'tmail'=>array(
                        'Sending Templated Mail',
                        'how'=>'How to use',
                        'extend'=>'extending',
                        ),
                    'htmlsanitizer'=>'HTMLSanitizer',
                    'processio'=>'ProcessIO',
                    'upgradechecker'=>'UpgradeChecker',
                    'order'=>'Order',
                    ),
                ),
            );
//}}}
//{{{ a - Addons
        $doc['a']=array('Add-ons',
            'crud'=>array(
                'CRUD',
                'how'=>'How to use',
                'dont'=>'When not to use',
                'fields'=>'Controlling which fields appear',
                'restrict'=>'Restricting actions',
                'actions'=>'Adding additional actions',
                ),
            'filestore'=>array(
                'Filestore',
                'how'=>'How to use',
                'types'=>'File Type restrictions',
                'extend'=>'Custom File Model',
                'image'=>'Image Upload and Manipulation',
                ),
            'schemagenerator'=>array(
                'SQL Schema Generator',
                'how'=>'How to use',
                'limitations'=>'Limitations and Notes',
                ),
            'payment'=>array(
                'Payment Gateway Integration',
                'cc'=>array(
                    'Credit Card',
                    'form'=>'Form',
                    ),
                'paypal'=>'PayPal',
                'transaction'=>'Transactions',
                'recurring'=>'Recurring',
                'subscription'=>'Subscriptions',
                ),
            'cm'=>array(
                'Campaign Monitor',
                'howto'=>'How to use',
                'backend'=>'Backend integration',
                'api'=>'Using API',
                'ui'=>'UI',
                ),
            'googlemaps'=>array(
                'Google Maps',
                'how'=>'How to use',
                'advanced'=>'Advanced examples',
                ),
            'oauth'=>array(
                'OAuth integration',
                'howto'=>'How to use',
                'auth'=>'Integrating with Auth',
                'vendor'=>array(
                    'Vendors',
                    'twitter'=>'Twitter',
                    'facebook'=>'Facebook',
                    'linkedin'=>'LinkedIn',
                    ),
                ),
            'doc'=>array(
                'Documentation Engine',
                'how'=>'How to document your own code',
                '- [ ]',
                '- [ ]',
                ),
            'test'=>array(
                'Testing',
                'unit'=>'Unit testing',
                'performance'=>'Performance testing',
                ),
            );
//}}}
//{{{ new - New Additions
        $doc['changes']=array('New additions',
            '4.1'=>array('Whats new in 4.1',
                '- [ ]',
                ),
            'obsolete'=>array('Unmaintained Code',
                '4.0'=>array('Since 4.0 (Artifacts from 3.0)',
                    'Cluster DB driver',
                    'psql',
                    'Storage',
                    'ApiPortal',
                    'RPC',
                    'ApiStatic',
                    'sw',
                    'AuthHTTP',
                    'ClassDoc', 'Entity', 'DForm', 'FreeForm', 'FileUploader', 'FloatingFrame', 'Ajax', 'JSON', 'JsonLister',
                    'RSS', 'DBAuth', 'TipManager', 'VersionControl', 'Wizard', 'AP',
                    'mTrace',
                    'js'=>array(
                        'atk4_tabs', 'atk4_todo', 'fat_checkbox',),
                    'tools'=>array(
                        'create-mvs', 'sampleproject', 'samplewebsite', '- [ ]',
                        ),
                    ), 
                
                '4.1'=>array('Since 4.1 (Artifacts from 4.0)',
                    'Page_EntityManager',
                    'atk4-web',
                    ),
                ),
            );
//}}}
        $this->api->sitemap=$doc;
    }
}
// vim: set foldmethod=marker:
