<?php
/**
 * Internationalisation file for Sternograph extension.
 */
$messages = array();

/**
 * English
 */
$messages['en'] = array(
	'sternograph-desc' => '<nowiki><sterno></nowiki> tags for transcripts of spokens words (plays, interviews, etc)',
	'sternograph-empty' => '<$1> tag cannot be empty.',
	'sternograph-nested' => '<$1> tag cannot be nested.',
	'sternograph-speaker-is' => '<$1> speaker block lines must have $2 character.',

	'sternograph-speaker-pre' => '',
	'sternograph-speaker-post' => ':&nbsp;',
	'sternograph-block-pre' => '',
	'sternograph-block-post' => '',
	'sternograph-inline-pre' => '[',
	'sternograph-inline-post' => ']',
	'sternograph-context-pre' => '&mdash;',
	'sternograph-context-post' => ''
);

/** Message documentation (Message documentation)
 * @author Siebrand
 */
$messages['qqq'] = array(
	'sternograph-desc' => 'Description of the Sternograph extension; displayed on the Special:Extensions page only.',
	'sternograph-empty' => 'Error message when an empty tag is detected on the wiki-formatted page.  The tag name to display is parsed to this function as the first parameter.',
	'sternograph-nested' => 'Error message when a sternograph tag occurs within an existing sternograph tag on the wiki-formatted page.  The tag name to display is the first parameter.',
	'sternograph-speaker-is' => 'Error message when a speaker block does not contain the speaker delimeter on the wiki-formatted page. Parameters:
* $1 is the tag name to display
* $2 is the character that is required.',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'sternograph-desc' => 'Etiquetes <nowiki><sterno></nowiki> pa trescripciones de discursos (representaciones, entrevistes, etc.)',
	'sternograph-empty' => 'La etiqueta <$1> nun pue tar balera.',
	'sternograph-nested' => 'La etiqueta <$1> nun pue tar añerada.',
	'sternograph-speaker-is' => 'Les llinies del bloque de discursu <$1> tienen de tener el caráuter $2.',
);

/** Breton (brezhoneg)
 * @author Y-M D
 */
$messages['br'] = array(
	'sternograph-desc' => "Balizenn <nowiki><sterno></nowiki> evit treuzskirvañ ar c'homzoù (c'hoarioù, atersadennoù, hag all)",
	'sternograph-empty' => "Ne c'hell ket bezañ goullo ar balizenn <$1>.",
);

/** German (Deutsch)
 * @author Kghbln
 */
$messages['de'] = array(
	'sternograph-desc' => 'Ermöglicht <nowiki><sterno></nowiki>-Tags für Niederschriften von Gesprochenem (Theaterstücke, Interviews, usw.)',
	'sternograph-empty' => 'Das <$1>-Tag darf nicht leer sein.',
	'sternograph-nested' => 'Das <$1>-Tag darf nicht verschachtelt sein.',
	'sternograph-speaker-is' => 'Die Zeilen des <$1>-Blocks müssen das Zeichen „$2“ enthalten.',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'sternograph-desc' => 'Zmóžnja elementy <nowiki><sterno></nowiki> za pisanje powědanych słowow (źiwadłowe graśa, interviewy atd.)',
	'sternograph-empty' => 'Element <$1> njesmějo prozny byś.',
	'sternograph-nested' => 'Element <$1> njemóžo se zašachtelikaś.',
	'sternograph-speaker-is' => 'Smužki powědarskego bloka <$1> musy $2 {{PLURAL:$2|znamuško|znamušce|znamuška|znamuškow}} měś.',
);

/** Spanish (español)
 * @author Armando-Martin
 */
$messages['es'] = array(
	'sternograph-desc' => 'Etiquetas <nowiki><sterno></nowiki> para las transcripciones de discursos (juegos, entrevistas, etc.)',
	'sternograph-empty' => 'La etiqueta <$1> no puede estar vacía.',
	'sternograph-nested' => 'La etiqueta <$1> no puede anidarse.',
	'sternograph-speaker-is' => 'Las líneas del bloque de discurso <$1> deben contener el carácter $2.',
);

/** French (français)
 * @author Gomoko
 */
$messages['fr'] = array(
	'sternograph-desc' => 'Balises <nowiki><sterno></nowiki> pour transcrire des paroles (jeux, interviews, etc.)',
	'sternograph-empty' => 'La balise <$1> ne peut pas être vide.',
	'sternograph-nested' => 'La balise <$1> ne peut pas être imbriquée.',
	'sternograph-speaker-is' => 'Les lignes du bloc de discours <$1> doivent avoir le caractère $2.',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'sternograph-empty' => 'La balisa <$1> pôt pas étre voueda.',
	'sternograph-nested' => 'La balisa <$1> pôt pas étre embrecâye.',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'sternograph-desc' => 'Etiquetas <nowiki><sterno></nowiki> para transcribir discursos (xogos, entrevistas etc.)',
	'sternograph-empty' => 'A etiqueta <$1> non pode estar baleira.',
	'sternograph-nested' => 'A etiqueta <$1> non pode estar aniñada.',
	'sternograph-speaker-is' => 'As liñas do bloque de discurso <$1> deben conter o carácter "$2".',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'sternograph-desc' => 'Zmóžnja elementy <nowiki><sterno></nowiki> za pisanje rěčanych słowow (dźiwadłowe hry, interviewy atd.)',
	'sternograph-empty' => 'Element <$1> njesmě prózdny być.',
	'sternograph-nested' => 'Element <$1> njemóže so zakašćikować.',
	'sternograph-speaker-is' => 'Linki rěčniskeho bloka <$1> dyrbi $2 znamješkow měć.',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'sternograph-desc' => 'Etiquettas <nowiki><sterno></nowiki> pro transcriptos de parolas parlate (dramas, interviews, etc.)',
	'sternograph-empty' => 'Le etiquetta <$1> non pote esser vacue.',
	'sternograph-nested' => 'Le etiquetta <$1> non pote esser usate recursivemente.',
	'sternograph-speaker-is' => 'Le delimitator de bloco de parlator pro <$1> debe haber le character $2.',
);

/** Italian (italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'sternograph-desc' => 'Tag <nowiki><sterno></nowiki> per le trascrizioni di parole pronunciate (spettacoli, interviste, ecc)',
	'sternograph-empty' => 'Il tag <$1> non può essere vuoto.',
	'sternograph-nested' => 'Il tag <$1> non può essere nidificato.',
	'sternograph-speaker-is' => 'Le linee del blocco di pronuncia <$1> devono avere il carattere $2.',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'sternograph-empty' => '<$1> タグは空にはできません。',
	'sternograph-nested' => '<$1> タグは入れ子にできません。',
	'sternograph-speaker-is' => '<$1> スピーカーブロック行には $2 文字必要です。',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'sternograph-desc' => '<nowiki><sterno></nowiki> Befähle för et Jeschwads opzeschrieve, en Stöckcher, Engervjuhs, un esu jät.',
	'sternograph-empty' => 'Dä Befähl <$1> darf nit läddesch sin.',
	'sternograph-nested' => 'Der Befähl <$1> darf mer nit verschachtelle.',
	'sternograph-speaker-is' => 'En dä Reije em Kaste vum Schpräscher em Befähl <$1>  moss et Zeische $2 dren sin.',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'sternograph-desc' => "<nowiki><sterno></nowiki> Tagen fir d'Ëmschreiwe vu geschwate Wierder (Theaterstécker, Interviewen, asw.)",
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'sternograph-desc' => 'Ознаки <nowiki><sterno></nowiki> за препис (стенограми) на говор (драмски дела, интервјуа и тн.)',
	'sternograph-empty' => 'Ознаката <$1> не може да стои празна.',
	'sternograph-nested' => 'Ознаката <$1> не може да се вгнезди.',
	'sternograph-speaker-is' => 'Редовите во блокот <$1> (за говорник) мора да го содржат знакот „$2“.',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'sternograph-desc' => 'Tag <nowiki><sterno></nowiki> untuk transkrip perbualan (drama, wawancara, dsb)',
	'sternograph-empty' => 'Tag <$1> tidak boleh dibiarkan kosong.',
	'sternograph-nested' => 'Tag <$1> tidak boleh disarangkan.',
	'sternograph-speaker-is' => 'Baris blok penutur <$1> mesti mempunyai aksara $2.',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'sternograph-desc' => '<nowiki><sterno></nowiki>-labels voor de transcriptie van gesproken woorden (toneelstukken, interviews, enzovoort)',
	'sternograph-empty' => 'Het label <$1> mag niet leeg zijn.',
	'sternograph-nested' => 'Het label <$1> mag niet genest worden.',
	'sternograph-speaker-is' => 'Het sprekerblok <$1> moet het teken $2 bevatten.',
);

/** Polish (polski)
 * @author BeginaFelicysym
 */
$messages['pl'] = array(
	'sternograph-desc' => 'Znaczniki <nowiki><sterno></sterno></nowiki> do zapisów wymowy słów (utwory, wywiady itp.)',
	'sternograph-empty' => 'Znacznik <$1> nie może być pusty.',
	'sternograph-nested' => 'Znacznik <$1> nie może być zagnieżdżony.',
	'sternograph-speaker-is' => 'Linie bloku <$1> spikera  muszą zawierać znak $2.',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'sternograph-desc' => 'Tichëtte <nowiki><sterno></nowiki> për la trascrission ëd le paròle parlà (canson, antërviste, e via fòrt)',
	'sternograph-empty' => '<$1> la tichëtta a peul pa esse veuida.',
	'sternograph-nested' => '<$1> la tichëtta a peul pa esse anidà.',
	'sternograph-speaker-is' => 'Le linie dël blòch dël discors <$1> a devo avèj ël caràter $2.',
);

/** Russian (русский)
 * @author Eleferen
 */
$messages['ru'] = array(
	'sternograph-desc' => '<nowiki><sterno></nowiki>теги для записи произнесённых слов (воспроизведение, обсуждение, др.)',
	'sternograph-empty' => 'Тег <$1> не может быть пустым.',
	'sternograph-nested' => 'Тег <$1> не может быть вложенным.',
	'sternograph-speaker-is' => 'Строка в блок спикера должна содержать $2 символа.',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'sternograph-empty' => '<$1> ట్యాగు ఖాళీగా ఉండకూడదు.',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'sternograph-desc' => 'Mga tatak na <nowiki><sterno></nowiki> para sa mga sipi ng naisulat na mga salitang nasabi (mga dula, mga panayam, atbp)',
	'sternograph-empty' => 'Ang tatak na <$1> ay hindi maaaring walang laman.',
	'sternograph-nested' => 'Ang tatak na <$1> ay hindi maaaring nakapugad.',
	'sternograph-speaker-is' => 'Ang <$1> na mga guhit ng bloke ng tagapagsalita ay dapat na mayroong $2 mga panitik.',
);

