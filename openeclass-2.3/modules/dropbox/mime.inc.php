<?php
/*========================================================================
*   Open eClass 2.3
*   E-learning and Course Management System
* ========================================================================
*  Copyright(c) 2003-2010  Greek Universities Network - GUnet
*  A full copyright notice can be read in "/info/copyright.txt".
*
*  Developers Group:	Costas Tsibanis <k.tsibanis@noc.uoa.gr>
*			Yannis Exidaridis <jexi@noc.uoa.gr>
*			Alexandros Diamantidis <adia@noc.uoa.gr>
*			Tilemachos Raptis <traptis@noc.uoa.gr>
*
*  For a full list of contributors, see "credits.txt".
*
*  Open eClass is an open platform distributed in the hope that it will
*  be useful (without any warranty), under the terms of the GNU (General
*  Public License) as published by the Free Software Foundation.
*  The full license can be read in "/info/license/license_gpl.txt".
*
*  Contact address: 	GUnet Asynchronous eLearning Group,
*  			Network Operations Center, University of Athens,
*  			Panepistimiopolis Ilissia, 15784, Athens, Greece
*  			eMail: info@openeclass.org
* =========================================================================*/
/**
 * creates variable $mimetype containing all known mimetypes based on the file extension
 * This is included in the download script and is used to give hints to browser about what
 * mimetype is being used
 *
 */

$mimetype = array(
'ez' => 'application/andrew-inset'
, 'hqx' => 'application/mac-binhex40'
, 'cpt' => 'application/mac-compactpro'
, 'doc' => 'application/msword'
, 'pdf' => 'application/pdf'
, 'ai' => 'application/postscript'
, 'eps' => 'application/postscript'
, 'ps' => 'application/postscript'
, 'xls' => 'application/vnd.ms-excel'
, 'ppt' => 'application/vnd.ms-powerpoint'
, 'dir' => 'application/x-director'
, 'latex' => 'application/x-latex'
, 'tar' => 'application/x-tar'
, 'src' => 'application/x-wais-source'
, 'zip' => 'application/zip'
, 'mpga' => 'audio/mpeg'
, 'mp2' => 'audio/mpeg'
, 'mp3' => 'audio/mpeg'
, 'wav' => 'audio/x-wav'
, 'gif' => 'image/gif'
, 'jpeg' => 'image/jpeg'
, 'jpg' => 'image/jpeg'
, 'jpe' => 'image/jpeg'
, 'png' => 'image/png'
, 'igs' => 'model/iges'
, 'iges' => 'model/iges'
, 'msh' => 'model/mesh'
, 'mesh' => 'model/mesh'
, 'silo' => 'model/mesh'
, 'wrl' => 'model/vrml'
, 'vrml' => 'model/vrml'
, 'css' => 'text/css'
, 'html' => 'text/html'
, 'htm' => 'text/html'
, 'asc' => 'text/plain'
, 'txt' => 'text/plain'
, 'xml' => 'text/xml'
, 'xsl' => 'text/xml'
, 'mpeg' => 'video/mpeg'
, 'mov' => 'video/quicktime'
    );

?>
