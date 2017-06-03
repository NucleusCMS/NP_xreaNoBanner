<?php
class NP_xreaNoBanner extends NucleusPlugin {
    function getName()              { return __CLASS__; }
    function getAuthor()            { return 'yamamoto'; }
    function getVersion()           { return '0.1'; }
    function getURL()               { return 'https://github.com/NucleusCMS/NP_XreaNoBanner'; }
    function getMinNucleusVersion() { return 360; }
    function getDescription()       { return 'xreaの広告バナーを管理画面内で非表示にする'; }
    function supportsFeature($key)  { return (int)in_array($key, array('NoSql')); }
    function getEventList()         { return array('AdminPrePageHead'); }
    function event_AdminPrePageHead(&$data){ $data['extrahead'].="\n<!--nobanner-->\n";}
}
