<?php
$cancion = "mp3/test1.mp3";
$creador = "djtokio";
$album = "uno";
$titulo = "dj tokio";
$nota = "ponesalgo";

echo"
<?xml version='1.0' encoding='UTF-8'?>
<playlist version='1' xmlns='http://xspf.org/ns/0/'>
    <title>Ounage Playlist</title>
    <creator>Dew</creator>
    <link>http://www.blup.fr/</link>
    <info>The Best Playlist for Testing</info>
    <image>covers/tracklist.jpg</image>

    <trackList>

        <track>
          <location>".$cancion."</location>
          <creator>".$creador."</creator>
          <album>".$album."</album>
          <title>".$titulo."</title>
          <annotation>".$nota."</annotation>
          <duration>32000</duration>
          <image>covers/1.jpg</image>
          <info></info>
          <link>http://fr.wikipedia.org/wiki/M%C3%A1_Vlast_(Smetana)</link>
        </track>
        
        <track>
          <location>mp3/test2.mp3</location>
          <creator>Antonin Dvorak</creator>
          <album>La Symphonie du Nouveau Monde</album>
          <title>La Symphonie du Nouveau Monde</title>
          <annotation></annotation>
          <duration></duration>
          <image>covers/2.jpg</image>
          <info></info>
          <link>http://fr.wikipedia.org/wiki/Cesaria_Evora</link>
        </track>
        
        <track>
          <location>mp3/test3.mp3</location>
          <creator>Jean-Claude Petit</creator>
          <album>Le Hussard sur le Toit</album>
          <title>Le Hussard sur le Toit</title>
          <annotation></annotation>
          <duration></duration>
          <image>covers/3.jpg</image>
          <info></info>
          <link></link>
        </track>

    </trackList>
</playlist>
";