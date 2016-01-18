<?php

use Symfony\Component\Templating\PhpEngine;
use Symfony\Component\Templating\TemplateNameParser;
use Symfony\Component\Templating\Loader\FilesystemLoader;


$loader = new FilesystemLoader(__DIR__.'/views/%name%');

$templating = new PhpEngine(new TemplateNameParser(), $loader);

echo $templating->render('hello.php', array('firstname' => 'Jessie'));

 $names = array('Jessie', ...) 
 foreach ($names as $name) : 
    <?php echo $view->render('hello.php', array('firstname' => $name)) 
 endforeach ?>

<p>The google tracking code is: <?php echo $ga_tracking ?></p>;
<?php
use Symfony\Component\Templating\Helper\AssetsHelper;
$templating->set(new AssetsHelper());

render(string|TemplateReferenceInterface $name, array $parameters = array());
exists(string|TemplateReferenceInterface $name);
supports(string|TemplateReferenceInterface $name);

use Acme\Templating\CustomEngine;
use Symfony\Component\Templating\PhpEngine;
use Symfony\Component\Templating\DelegatingEngine;

$templating = new DelegatingEngine(array(
    new PhpEngine(...),
    new CustomEngine(...),
));

?>