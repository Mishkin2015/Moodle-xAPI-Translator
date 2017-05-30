<?php namespace MXTranslator\Tests;
use \MXTranslator\Events\ScormEvent as Event;

class ScormEventTest extends ModuleViewed {
    protected static $recipe_name = 'scorm_event';
    /**
     * Sets up the tests.
     * @override TestCase
     */
    public function setup() {
        $this->event = new Event();
    }

    protected function constructScormScoes()
    {
        return (object)[
            'id' => 1,
            'scorm' => 1,
            'scormtype' => 'sco',
            'title' => 'Sco title'
        ];
    }
}