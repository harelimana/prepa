<?php
namespace AppBundle\DataFixtures\ORM;
use Hautelook\AliceBundle\Alice\DataFixtureLoader;
use Nelmio\Alice\Fixtures;
/**
 * Description of AppFixtures
 *
 * @author axxa
 */
class AppFixtures extends DataFixtureLoader{
    protected function getFixtures(){
        return array(__DIR__ . '/Categorie.yml');
    }
}
