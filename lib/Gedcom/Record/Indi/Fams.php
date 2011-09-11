<?php
/**
 *
 */

namespace Gedcom\Record\Indi;

use \Gedcom\Record\Noteable;

/**
 *
 */
class Fams extends \Gedcom\Record implements Noteable
{
    /**
     *
     */
    protected $_fams = null;
    
    /**
     *
     */
    protected $_note = array();
    
    /**
     *
     */
    public function addNote(\Gedcom\Record\NoteRef &$note)
    {
        $this->_note[] = &$note;
    }
}

