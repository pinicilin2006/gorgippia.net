<?php

/* attachment.html */
class __TwigTemplate_daa0c611c3cccad8e181dfa00a94766152f799185e9edda59d9e1a9ffc4f49fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "_file", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["_file"]) {
            // line 4
            echo "\t";
            if ($this->getAttribute($context["_file"], "S_DENIED", array())) {
                // line 5
                echo "\t<p>[";
                echo $this->getAttribute($context["_file"], "DENIED_MESSAGE", array());
                echo "]</p>
\t";
            } else {
                // line 7
                echo "\t\t";
                // line 8
                echo "
\t\t";
                // line 9
                if ($this->getAttribute($context["_file"], "S_THUMBNAIL", array())) {
                    // line 10
                    echo "\t\t<dl class=\"thumbnail\">
\t\t\t<dt><a href=\"";
                    // line 11
                    echo $this->getAttribute($context["_file"], "U_DOWNLOAD_LINK", array());
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["_file"], "THUMB_IMAGE", array());
                    echo "\" class=\"postimage\" alt=\"";
                    echo $this->getAttribute($context["_file"], "DOWNLOAD_NAME", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["_file"], "DOWNLOAD_NAME", array());
                    echo " (";
                    echo $this->getAttribute($context["_file"], "FILESIZE", array());
                    echo " ";
                    echo $this->getAttribute($context["_file"], "SIZE_LANG", array());
                    echo ", ";
                    echo $this->getAttribute($context["_file"], "L_DOWNLOAD_COUNT", array());
                    echo ")\" /></a></dt>
\t\t\t";
                    // line 12
                    if ($this->getAttribute($context["_file"], "COMMENT", array())) {
                        echo "<dd> ";
                        echo $this->getAttribute($context["_file"], "COMMENT", array());
                        echo "</dd>";
                    }
                    // line 13
                    echo "\t\t</dl>
\t\t";
                }
                // line 15
                echo "
\t\t";
                // line 16
                if ($this->getAttribute($context["_file"], "S_IMAGE", array())) {
                    // line 17
                    echo "\t\t<dl class=\"file\">
\t\t\t<dt class=\"attach-image\"><img src=\"";
                    // line 18
                    echo $this->getAttribute($context["_file"], "U_INLINE_LINK", array());
                    echo "\" class=\"postimage\" alt=\"";
                    echo $this->getAttribute($context["_file"], "DOWNLOAD_NAME", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["_file"], "DOWNLOAD_NAME", array());
                    echo " (";
                    echo $this->getAttribute($context["_file"], "FILESIZE", array());
                    echo " ";
                    echo $this->getAttribute($context["_file"], "SIZE_LANG", array());
                    echo ", ";
                    echo $this->getAttribute($context["_file"], "L_DOWNLOAD_COUNT", array());
                    echo ")\" /></dt>
\t\t\t";
                    // line 19
                    if ($this->getAttribute($context["_file"], "COMMENT", array())) {
                        echo "<dd><em>";
                        echo $this->getAttribute($context["_file"], "COMMENT", array());
                        echo "</em></dd>";
                    }
                    // line 20
                    echo "\t\t\t<dd class=\"hide-in-inline\">";
                    echo $this->getAttribute($context["_file"], "DOWNLOAD_NAME", array());
                    echo " (";
                    echo $this->getAttribute($context["_file"], "FILESIZE", array());
                    echo " ";
                    echo $this->getAttribute($context["_file"], "SIZE_LANG", array());
                    echo ") ";
                    echo $this->getAttribute($context["_file"], "L_DOWNLOAD_COUNT", array());
                    echo "</dd>
\t\t</dl>
\t\t";
                }
                // line 23
                echo "
\t\t";
                // line 24
                if ($this->getAttribute($context["_file"], "S_FILE", array())) {
                    // line 25
                    echo "\t\t<dl class=\"file\">
\t\t\t<dt class=\"attach-file";
                    // line 26
                    if ($this->getAttribute($context["_file"], "UPLOAD_ICON", array())) {
                        echo "-with-icon";
                    }
                    echo "\">";
                    if ($this->getAttribute($context["_file"], "UPLOAD_ICON", array())) {
                        echo $this->getAttribute($context["_file"], "UPLOAD_ICON", array());
                        echo " ";
                    }
                    echo "<a class=\"postlink\" href=\"";
                    echo $this->getAttribute($context["_file"], "U_DOWNLOAD_LINK", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["_file"], "DOWNLOAD_NAME", array());
                    echo " (";
                    echo $this->getAttribute($context["_file"], "FILESIZE", array());
                    echo " ";
                    echo $this->getAttribute($context["_file"], "SIZE_LANG", array());
                    echo ", ";
                    echo $this->getAttribute($context["_file"], "L_DOWNLOAD_COUNT", array());
                    echo ")";
                    if ($this->getAttribute($context["_file"], "COMMENT", array())) {
                        echo " - ";
                        echo $this->getAttribute($context["_file"], "COMMENT", array());
                    }
                    echo "\">";
                    echo $this->getAttribute($context["_file"], "DOWNLOAD_NAME", array());
                    echo "</a></dt>
\t\t\t";
                    // line 27
                    if ($this->getAttribute($context["_file"], "COMMENT", array())) {
                        echo "<dd class=\"hide-in-inline\"><em>";
                        echo $this->getAttribute($context["_file"], "COMMENT", array());
                        echo "</em></dd>";
                    }
                    // line 28
                    echo "\t\t\t<dd class=\"hide-in-inline\">(";
                    echo $this->getAttribute($context["_file"], "FILESIZE", array());
                    echo " ";
                    echo $this->getAttribute($context["_file"], "SIZE_LANG", array());
                    echo ") ";
                    echo $this->getAttribute($context["_file"], "L_DOWNLOAD_COUNT", array());
                    echo "</dd>
\t\t</dl>
\t\t";
                }
                // line 31
                echo "
\t\t";
                // line 32
                if ((($this->getAttribute($context["_file"], "S_AUDIO_FILE", array()) || $this->getAttribute($context["_file"], "S_VIDEO_FILE", array())) || $this->getAttribute($context["_file"], "S_FLASH_FILE", array()))) {
                    // line 33
                    echo "\t\t<dl class=\"file\">
\t\t\t<dt>
\t\t\t";
                    // line 35
                    if (($this->getAttribute($context["_file"], "S_AUDIO_FILE", array()) || $this->getAttribute($context["_file"], "S_VIDEO_FILE", array()))) {
                        // line 36
                        echo "\t\t\t\t<script>
\t\t\t\tfunction addListener(obj, type, listener) {
\t\t\t\t\tif (obj.addEventListener) {
\t\t\t\t\t\tobj.addEventListener(type, listener, false);
\t\t\t\t\t\treturn true;
\t\t\t\t\t} else if(obj.attachEvent) {
\t\t\t\t\t\tobj.attachEvent('on' + type, listener);
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\t</script>
\t\t\t\t";
                        // line 48
                        if ($this->getAttribute($context["_file"], "S_AUDIO_FILE", array())) {
                            // line 49
                            echo "\t\t\t\t<audio id=\"attach_audio_";
                            echo $this->getAttribute($context["_file"], "ATTACH_ID", array());
                            echo "\" preload=\"none\" controls>
\t\t\t\t\t<source src=\"";
                            // line 50
                            echo $this->getAttribute($context["_file"], "U_DOWNLOAD_LINK", array());
                            echo "\" type=\"";
                            echo $this->getAttribute($context["_file"], "MIME", array());
                            echo "\">
\t\t\t\t</audio>
\t\t\t\t<script>
\t\t\t\taddListener(window, 'load', function() {
\t\t\t\t\tjQuery(function(\$)
\t\t\t\t\t{
\t\t\t\t\t\t\$('#attach_audio_";
                            // line 56
                            echo $this->getAttribute($context["_file"], "ATTACH_ID", array());
                            echo "').mediaelementplayer();
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t</script>
\t\t\t\t";
                        } else {
                            // line 61
                            echo "\t\t\t\t<video id=\"attach_video_";
                            echo $this->getAttribute($context["_file"], "ATTACH_ID", array());
                            echo "\" preload=\"none\" controls>
\t\t\t\t\t<source src=\"";
                            // line 62
                            echo $this->getAttribute($context["_file"], "U_DOWNLOAD_LINK", array());
                            echo "\" type=\"";
                            echo $this->getAttribute($context["_file"], "MIME", array());
                            echo "\">
\t\t\t\t</video>
\t\t\t\t<script>
\t\t\t\taddListener(window, 'load', function() {
\t\t\t\t\tjQuery(function(\$)
\t\t\t\t\t{
\t\t\t\t\t\t\$('#attach_video_";
                            // line 68
                            echo $this->getAttribute($context["_file"], "ATTACH_ID", array());
                            echo "').mediaelementplayer();
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t</script>
\t\t\t\t";
                        }
                        // line 73
                        echo "\t\t\t";
                    } elseif ($this->getAttribute($context["_file"], "S_FLASH_FILE", array())) {
                        // line 74
                        echo "\t\t\t\t<object classid=\"clsid:D27CDB6E-AE6D-11CF-96B8-444553540000\" width=\"";
                        echo $this->getAttribute($context["_file"], "WIDTH", array());
                        echo "\" height=\"";
                        echo $this->getAttribute($context["_file"], "HEIGHT", array());
                        echo "\">
\t\t\t\t\t<param name=\"movie\" value=\"";
                        // line 75
                        echo $this->getAttribute($context["_file"], "U_VIEW_LINK", array());
                        echo "\" />
\t\t\t\t\t<param name=\"play\" value=\"true\" />
\t\t\t\t\t<param name=\"loop\" value=\"true\" />
\t\t\t\t\t<param name=\"quality\" value=\"high\" />
\t\t\t\t\t<param name=\"allowScriptAccess\" value=\"never\" />
\t\t\t\t\t<param name=\"allowNetworking\" value=\"internal\" />
\t\t\t\t\t<embed src=\"";
                        // line 81
                        echo $this->getAttribute($context["_file"], "U_VIEW_LINK", array());
                        echo "\" type=\"application/x-shockwave-flash\" width=\"";
                        echo $this->getAttribute($context["_file"], "WIDTH", array());
                        echo "\" height=\"";
                        echo $this->getAttribute($context["_file"], "HEIGHT", array());
                        echo "\" play=\"true\" loop=\"true\" quality=\"high\" allowscriptaccess=\"never\" allownetworking=\"internal\"></embed>
\t\t\t\t</object>
\t\t\t";
                    }
                    // line 84
                    echo "\t\t\t</dt>
\t\t\t";
                    // line 85
                    if ($this->getAttribute($context["_file"], "COMMENT", array())) {
                        echo "<dd><em>";
                        echo $this->getAttribute($context["_file"], "COMMENT", array());
                        echo "</em></dd>";
                    }
                    // line 86
                    echo "\t\t\t<dd";
                    if ($this->getAttribute($context["_file"], "S_FLASH_FILE", array())) {
                        echo " class=\"hide-in-inline\"";
                    }
                    echo "><a href=\"";
                    echo $this->getAttribute($context["_file"], "U_DOWNLOAD_LINK", array());
                    echo "\">";
                    echo $this->getAttribute($context["_file"], "DOWNLOAD_NAME", array());
                    echo "</a> (";
                    echo $this->getAttribute($context["_file"], "FILESIZE", array());
                    echo " ";
                    echo $this->getAttribute($context["_file"], "SIZE_LANG", array());
                    echo ") ";
                    echo $this->getAttribute($context["_file"], "L_DOWNLOAD_COUNT", array());
                    echo "</dd>
\t\t</dl>
\t\t";
                }
                // line 89
                echo "
\t\t";
                // line 90
                // line 91
                echo "\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
    }

    public function getTemplateName()
    {
        return "attachment.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 93,  302 => 91,  301 => 90,  298 => 89,  279 => 86,  273 => 85,  270 => 84,  260 => 81,  251 => 75,  244 => 74,  241 => 73,  233 => 68,  222 => 62,  217 => 61,  209 => 56,  198 => 50,  193 => 49,  191 => 48,  177 => 36,  175 => 35,  171 => 33,  169 => 32,  166 => 31,  155 => 28,  149 => 27,  121 => 26,  118 => 25,  116 => 24,  113 => 23,  100 => 20,  94 => 19,  80 => 18,  77 => 17,  75 => 16,  72 => 15,  68 => 13,  62 => 12,  46 => 11,  43 => 10,  41 => 9,  38 => 8,  36 => 7,  30 => 5,  27 => 4,  23 => 3,  20 => 2,  19 => 1,);
    }
}
