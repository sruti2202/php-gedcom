<?php
/**
 *
 */

namespace Gedcom\Record\Indi\Even;

use \Gedcom\Record\Noteable;
use \Gedcom\Record\Sourceable;

/**
 *
 */
class Place extends \Gedcom\Record implements Noteable, Sourceable
{
    public $place = null;
    public $form = null;
    
    /**
     *
     */
    protected $_note = array();
    
    /**
     *
     */
    protected $_sour = array();
    
    /**
     *
     */
    public function addNote(\Gedcom\Record\NoteRef &$note)
    {
        $this->_note[] = &$note;
    }
    
    /**
     *
     */
    public function addSour(\Gedcom\Record\SourRef &$sour)
    {
        $this->_sour[] = &$sour;
    }
}

