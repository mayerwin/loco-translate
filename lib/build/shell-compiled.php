<?php
/**
 * Compiled source code - DO NOT EDIT!
 * @author Tim Whitlock http://timwhitlock.info/
 * @date Fri, 03 Jan 2014 11:14:28 +0000 
 */
   function loco_compile_mo( $po ){ $descriptorspec = array( 0 => array('pipe', 'r'), 1 => array('pipe', 'w'), 2 => array('pipe', 'a'), ); $cmd = WHICH_MSGFMT.' -o - -'; $process = proc_open($cmd, $descriptorspec, $pipes ); if( ! $process ){ throw new Exception('Failed to open process to '.$cmd); } fwrite($pipes[0], $po); fclose($pipes[0]); $err = stream_get_contents($pipes[2]); fclose($pipes[2]); $mo = stream_get_contents($pipes[1]); fclose($pipes[1]); $e = proc_close($process); if( 0 !== $e ){ $err and trigger_error( $err, E_USER_WARNING ); throw new Exception( WHICH_MSGFMT.' exited with code '.sprintf('%d',$e).'; Got '.strlen($mo).' bytes from '.strlen($po).' bytes'); } if( ! $mo ){ throw new Exception('Empty file from '.WHICH_MSGFMT); } return $mo; }   function loco_compile_mo_file( $pofile, $mofile = '' ){ $descriptorspec = array ( 0 => array('pipe', 'r'), 1 => array('pipe', 'w'), 2 => array('pipe', 'a'), ); if( ! $mofile ){ $mofile = $pofile.'.mo'; } $cmd = WHICH_MSGFMT.' -o '.escapeshellarg($mofile).' '.escapeshellarg($pofile); $process = proc_open($cmd, $descriptorspec, $pipes ); if( ! $process ){ throw new Exception('Failed to open process to '.$cmd); } $err = stream_get_contents($pipes[0]); fclose($pipes[0]); $e = proc_close($process); if( 0 !== $e ){ $err and trigger_error( $err, E_USER_WARNING ); throw new Exception('Gettext msgfmt exited with code '.sprintf('%d',$e).';'); } if( ! file_exists($mofile) ){ throw new Exception('Gettext msgfmt failed to create '.$mofile); } return $mofile; } function loco_find_executable( $name ){ $paths = array ( '/usr/local/', '/usr/', '/', '~/' ); $descriptorspec = array ( 0 => array('pipe', 'r'), 1 => array('pipe', 'w'), 2 => array('pipe', 'w'), ); foreach( array('bin/','sbin/') as $dir ){ foreach( $paths as $path ){ $bin = $path.$dir.$name; $cmd = '[ -x '.escapeshellarg($bin).' ]'; $process = proc_open( $cmd, $descriptorspec, $pipes ); if( ! $process ){ return ''; } $e = proc_close($process); if( 0 === $e ){ return $bin; } } } return ''; } 