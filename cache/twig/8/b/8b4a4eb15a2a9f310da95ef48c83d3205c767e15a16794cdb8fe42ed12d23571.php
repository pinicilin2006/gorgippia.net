<?php

/* quickreply_editor.html */
class __TwigTemplate_8b4a4eb15a2a9f310da95ef48c83d3205c767e15a16794cdb8fe42ed12d23571 extends Twig_Template
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
        if ((((isset($context["S_FORUM_RULES"]) ? $context["S_FORUM_RULES"] : null) || (isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null)) || (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null))) {
            // line 2
            echo "\t<div class=\"rules\">
\t\t<div class=\"inner\">
\t\t";
            // line 4
            if ((isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null)) {
                echo "<strong>";
                echo $this->env->getExtension('phpbb')->lang("FORUM_NAME");
                echo ":</strong> ";
                echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
                echo "<br />";
            }
            // line 5
            echo "\t\t";
            if ((isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null)) {
                echo "<strong>";
                echo $this->env->getExtension('phpbb')->lang("FORUM_DESC");
                echo ":</strong> ";
                echo (isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null);
                echo "<br />";
            }
            // line 6
            echo "\t\t";
            if ((isset($context["S_FORUM_RULES"]) ? $context["S_FORUM_RULES"] : null)) {
                echo "<strong>";
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
                echo ":</strong> ";
                if ((isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null)) {
                    echo "<a href=\"";
                    echo (isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null);
                    echo "\">";
                    echo (isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null);
                    echo "</a>";
                } else {
                    echo (isset($context["FORUM_RULES"]) ? $context["FORUM_RULES"] : null);
                }
                echo "<br />";
            }
            // line 7
            echo "\t\t</div>
\t</div>
";
        }
        // line 10
        echo "
<form method=\"post\" action=\"";
        // line 11
        echo (isset($context["U_QR_ACTION"]) ? $context["U_QR_ACTION"] : null);
        echo "\" id=\"postform\">
";
        // line 12
        // line 13
        echo "\t<div class=\"panel\" id=\"postingbox\">
\t\t<div class=\"inner\">
\t\t\t<h3 class=\"quickreply-title\">";
        // line 15
        echo $this->env->getExtension('phpbb')->lang("QUICK_REPLY");
        echo "</h3>
\t\t\t<fieldset class=\"fields1\">
\t\t\t\t";
        // line 17
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            echo "<p class=\"error\">";
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "</p>";
        }
        // line 18
        echo "
\t\t\t\t";
        // line 19
        if ((isset($context["S_SHOW_TOPIC_ICONS"]) ? $context["S_SHOW_TOPIC_ICONS"] : null)) {
            // line 20
            echo "\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"icon\">";
            // line 21
            echo $this->env->getExtension('phpbb')->lang("ICON");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<label for=\"icon\"><input type=\"radio\" name=\"icon\" id=\"icon\" value=\"0\" checked=\"checked\" /> ";
            // line 23
            echo $this->env->getExtension('phpbb')->lang("NO_TOPIC_ICON");
            echo "</label>
\t\t\t\t\t\t";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topic_icon", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["topic_icon"]) {
                echo "<label for=\"icon-";
                echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                echo "\"><input type=\"radio\" name=\"icon\" id=\"icon-";
                echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                echo "\" value=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                echo "\" ";
                echo $this->getAttribute($context["topic_icon"], "S_ICON_CHECKED", array());
                echo " /><img src=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_IMG", array());
                echo "\" width=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_WIDTH", array());
                echo "\" height=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_HEIGHT", array());
                echo "\" alt=\"\" title=\"\" /></label> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_icon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t\t";
        }
        // line 28
        echo "
\t\t\t\t";
        // line 29
        if ((isset($context["S_DISPLAY_USERNAME"]) ? $context["S_DISPLAY_USERNAME"] : null)) {
            // line 30
            echo "\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"username\">";
            // line 31
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t\t<dd><input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"60\" maxlength=\"35\" value=\"";
            // line 32
            echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
            echo "\" class=\"inputbox autowidth\" /></dd>
\t\t\t\t</dl>
\t\t\t\t";
        }
        // line 35
        echo "
\t\t\t\t";
        // line 36
        if ((isset($context["S_SUBJECT_ALLOWED"]) ? $context["S_SUBJECT_ALLOWED"] : null)) {
            // line 37
            echo "\t\t\t\t<dl style=\"clear: left;\">
\t\t\t\t\t<dt><label for=\"subject\">";
            // line 38
            echo $this->env->getExtension('phpbb')->lang("SUBJECT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t\t<dd><input type=\"text\" name=\"subject\" id=\"subject\" size=\"60\" maxlength=\"";
            // line 39
            if ((isset($context["S_NEW_MESSAGE"]) ? $context["S_NEW_MESSAGE"] : null)) {
                echo "120";
            } else {
                echo "124";
            }
            echo "\" tabindex=\"2\" value=\"";
            echo (isset($context["SUBJECT"]) ? $context["SUBJECT"] : null);
            echo "\" class=\"inputbox autowidth\" /></dd>
\t\t\t\t</dl>
\t\t\t\t";
        } else {
            // line 42
            echo "\t\t\t\t\t<input type=\"hidden\" name=\"subject\" value=\"";
            echo (isset($context["SUBJECT"]) ? $context["SUBJECT"] : null);
            echo "\" />
\t\t\t\t";
        }
        // line 44
        echo "
\t\t\t\t";
        // line 45
        if (((isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null) && (isset($context["S_CONFIRM_CODE"]) ? $context["S_CONFIRM_CODE"] : null))) {
            // line 46
            echo "\t\t\t\t\t";
            $value = 3;
            $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
            // line 47
            echo "\t\t\t\t\t<div id=\"captca-box\">
\t\t\t\t\t\t";
            // line 48
            $location = (("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . ""), "quickreply_editor.html", 48)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 49
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 51
        echo "
\t\t\t\t";
        // line 52
        $location = "posting_buttons.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("posting_buttons.html", "quickreply_editor.html", 52)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 53
        echo "
\t\t\t\t<div id=\"smiley-box\">
\t\t\t\t\t";
        // line 55
        if (((isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "smiley", array())))) {
            // line 56
            echo "\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "smiley", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["smiley"]) {
                // line 57
                echo "\t\t\t\t\t\t\t<img src=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_IMG", array());
                echo "\" width=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_WIDTH", array());
                echo "\" height=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_HEIGHT", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_CODE", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_DESC", array());
                echo "\" onclick=\"insert_text('";
                echo $this->getAttribute($context["smiley"], "A_SMILEY_CODE", array());
                echo "', true);\" />
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smiley'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "\t\t\t\t\t";
        }
        // line 60
        echo "\t\t\t\t\t";
        if (((isset($context["S_SHOW_SMILEY_LINK"]) ? $context["S_SHOW_SMILEY_LINK"] : null) && (isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null))) {
            // line 61
            echo "\t\t\t\t\t\t<a rel=\"nofollow\" href=\"";
            echo (isset($context["U_MORE_SMILIES"]) ? $context["U_MORE_SMILIES"] : null);
            echo "\" onclick=\"popup(this.href, 300, 350, '_phpbbsmilies'); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("MORE_SMILIES");
            echo "</a>
\t\t\t\t\t";
        }
        // line 63
        echo "
\t\t\t\t\t";
        // line 64
        if ( !(isset($context["EXTRA_OPTIONS_DISPLAY"]) ? $context["EXTRA_OPTIONS_DISPLAY"] : null)) {
            echo "<div style=\"display: none;\">";
        }
        // line 65
        echo "
\t\t\t\t\t";
        // line 66
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "smiley", array()))) {
            echo "<hr />";
        }
        // line 67
        echo "
\t\t\t\t\t";
        // line 68
        if ((isset($context["S_FIRST_POST_SHOW_ALLOWED"]) ? $context["S_FIRST_POST_SHOW_ALLOWED"] : null)) {
            // line 69
            echo "\t\t\t\t\t\t<label for=\"topic_first_post_show\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("FIRST_POST_SHOW_EXPLAIN");
            echo "\"><input type=\"checkbox\" name=\"topic_first_post_show\" id=\"topic_first_post_show\"";
            echo (isset($context["S_FIRST_POST_SHOW_CHECKED"]) ? $context["S_FIRST_POST_SHOW_CHECKED"] : null);
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("FIRST_POST_SHOW");
            echo "</label>
\t\t\t\t\t";
        }
        // line 71
        echo "\t\t\t\t\t";
        if ((isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null)) {
            // line 72
            echo "\t\t\t\t\t\t<label for=\"disable_bbcode\"><input type=\"checkbox\" name=\"disable_bbcode\" id=\"disable_bbcode\"";
            echo (isset($context["S_BBCODE_CHECKED"]) ? $context["S_BBCODE_CHECKED"] : null);
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("DISABLE_BBCODE");
            echo "</label>
\t\t\t\t\t";
        }
        // line 74
        echo "\t\t\t\t\t";
        if ((isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null)) {
            // line 75
            echo "\t\t\t\t\t\t<label for=\"disable_smilies\"><input type=\"checkbox\" name=\"disable_smilies\" id=\"disable_smilies\"";
            echo (isset($context["S_SMILIES_CHECKED"]) ? $context["S_SMILIES_CHECKED"] : null);
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("DISABLE_SMILIES");
            echo "</label>
\t\t\t\t\t";
        }
        // line 77
        echo "\t\t\t\t\t";
        if ((isset($context["S_LINKS_ALLOWED"]) ? $context["S_LINKS_ALLOWED"] : null)) {
            // line 78
            echo "\t\t\t\t\t\t<label for=\"disable_magic_url\"><input type=\"checkbox\" name=\"disable_magic_url\" id=\"disable_magic_url\"";
            echo (isset($context["S_MAGIC_URL_CHECKED"]) ? $context["S_MAGIC_URL_CHECKED"] : null);
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("DISABLE_MAGIC_URL");
            echo "</label>
\t\t\t\t\t";
        }
        // line 80
        echo "\t\t\t\t\t";
        if ((isset($context["S_SIG_ALLOWED"]) ? $context["S_SIG_ALLOWED"] : null)) {
            // line 81
            echo "\t\t\t\t\t\t<label for=\"attach_sig\"><input type=\"checkbox\" name=\"attach_sig\" id=\"attach_sig\"";
            echo (isset($context["S_SIGNATURE_CHECKED"]) ? $context["S_SIGNATURE_CHECKED"] : null);
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("ATTACH_SIG");
            echo "</label>
\t\t\t\t\t";
        }
        // line 83
        echo "
\t\t\t\t\t";
        // line 84
        if (((((isset($context["S_DO_MERGE_ALLOWED"]) ? $context["S_DO_MERGE_ALLOWED"] : null) || (isset($context["S_LOCK_POST_ALLOWED"]) ? $context["S_LOCK_POST_ALLOWED"] : null)) || (isset($context["S_LOCK_TOPIC_ALLOWED"]) ? $context["S_LOCK_TOPIC_ALLOWED"] : null)) || (isset($context["S_NOTIFY_ALLOWED"]) ? $context["S_NOTIFY_ALLOWED"] : null))) {
            echo "<hr />";
        }
        // line 85
        echo "
\t\t\t\t\t";
        // line 86
        if ((isset($context["S_DO_MERGE_ALLOWED"]) ? $context["S_DO_MERGE_ALLOWED"] : null)) {
            // line 87
            echo "\t\t\t\t\t\t<label for=\"do_merge\"><input type=\"checkbox\" name=\"do_merge\" id=\"do_merge\"";
            echo (isset($context["S_DO_MERGE_CHECKED"]) ? $context["S_DO_MERGE_CHECKED"] : null);
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("DO_MERGE");
            echo "</label>
\t\t\t\t\t";
        }
        // line 89
        echo "\t\t\t\t\t";
        if ((isset($context["S_NOTIFY_ALLOWED"]) ? $context["S_NOTIFY_ALLOWED"] : null)) {
            // line 90
            echo "\t\t\t\t\t\t<label for=\"notify\"><input type=\"checkbox\" name=\"notify\" id=\"notify\"";
            echo (isset($context["S_NOTIFY_CHECKED"]) ? $context["S_NOTIFY_CHECKED"] : null);
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NOTIFY_REPLY");
            echo "</label>
\t\t\t\t\t";
        }
        // line 92
        echo "\t\t\t\t\t";
        if ((isset($context["S_LOCK_TOPIC_ALLOWED"]) ? $context["S_LOCK_TOPIC_ALLOWED"] : null)) {
            // line 93
            echo "\t\t\t\t\t\t<label for=\"lock_topic\"><input type=\"checkbox\" name=\"lock_topic\" id=\"lock_topic\"";
            echo (isset($context["S_LOCK_TOPIC_CHECKED"]) ? $context["S_LOCK_TOPIC_CHECKED"] : null);
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("LOCK_TOPIC");
            echo "</label>
\t\t\t\t\t";
        }
        // line 95
        echo "\t\t\t\t\t";
        if ((isset($context["S_LOCK_POST_ALLOWED"]) ? $context["S_LOCK_POST_ALLOWED"] : null)) {
            // line 96
            echo "\t\t\t\t\t\t<label for=\"lock_post\"><input type=\"checkbox\" name=\"lock_post\" id=\"lock_post\"";
            echo (isset($context["S_LOCK_POST_CHECKED"]) ? $context["S_LOCK_POST_CHECKED"] : null);
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("LOCK_POST");
            echo "</label>
\t\t\t\t\t";
        }
        // line 98
        echo "
\t\t\t\t\t";
        // line 99
        if ( !(isset($context["EXTRA_OPTIONS_DISPLAY"]) ? $context["EXTRA_OPTIONS_DISPLAY"] : null)) {
            echo "</div>";
        }
        // line 100
        echo "
\t\t\t\t</div>

\t\t\t\t";
        // line 103
        // line 104
        echo "\t\t\t\t<div id=\"message-box\">
\t\t\t\t\t<textarea name=\"message\" id=\"message\" rows=\"15\" cols=\"76\" tabindex=\"3\" onselect=\"storeCaret(this);\" onclick=\"storeCaret(this);\" onkeyup=\"storeCaret(this);\" onfocus=\"initInsertions();\" class=\"inputbox\">";
        // line 105
        echo (isset($context["MESSAGE"]) ? $context["MESSAGE"] : null);
        echo "</textarea>
\t\t\t\t</div>
\t\t\t\t";
        // line 107
        // line 108
        echo "\t\t\t</fieldset>
\t\t</div>
\t</div>

\t";
        // line 112
        if ((isset($context["S_SHOW_ATTACH_BOX"]) ? $context["S_SHOW_ATTACH_BOX"] : null)) {
            $location = "posting_attach_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_attach_body.html", "quickreply_editor.html", 112)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 113
        echo "
\t<div class=\"panel bg2\">
\t\t<div class=\"inner\">
\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t";
        // line 117
        if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
            // line 118
            echo "\t\t\t\t\t";
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t\t\t";
        } else {
            // line 120
            echo "\t\t\t\t\t<input type=\"hidden\" name=\"creation_time\" value=\"0\" />
\t\t\t\t\t<input type=\"hidden\" name=\"form_token\" value=\"0\" />
\t\t\t\t\t<script>
\t\t\t\t\tfunction addListener(obj, type, listener) {
\t\t\t\t\t\tif (obj.addEventListener) {
\t\t\t\t\t\t\tobj.addEventListener(type, listener, false);
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t} else if(obj.attachEvent) {
\t\t\t\t\t\t\tobj.attachEvent('on' + type, listener);
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\treturn false;
\t\t\t\t\t}

\t\t\t\t\taddListener(document.getElementById(\"postform\"), 'submit', function() {
\t\t\t\t\t\t\$('i'+'nput[nam'+'e=cre'+'ation_ti'+'me]').val('";
            // line 135
            echo (isset($context["RAW_CREATION_TIME"]) ? $context["RAW_CREATION_TIME"] : null);
            echo "');
\t\t\t\t\t\t\$('in'+'pu'+'t[nam'+'e=form'+'_to'+'ken]').val('";
            // line 136
            echo (isset($context["RAW_FORM_TOKEN"]) ? $context["RAW_FORM_TOKEN"] : null);
            echo "');
\t\t\t\t\t});
\t\t\t\t\t";
            // line 138
            if ((isset($context["S_DISPLAY_USERNAME"]) ? $context["S_DISPLAY_USERNAME"] : null)) {
                // line 139
                echo "\t\t\t\t\taddListener(window, 'load', function() {
\t\t\t\t\t\tif (!('localStorage' in window && window['localStorage'] !== null) || \$('#username').val()) return;
\t\t\t\t\t\t\$('#username').val(localStorage.getItem('anonymous_username')).on('change', function()
\t\t\t\t\t\t{
\t\t\t\t\t\t\tlocalStorage.setItem('anonymous_username', \$(this).val());
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t\t";
            }
            // line 147
            echo "\t\t\t\t\t</script>
\t\t\t\t";
        }
        // line 149
        echo "\t\t\t\t";
        echo (isset($context["QR_HIDDEN_FIELDS"]) ? $context["QR_HIDDEN_FIELDS"] : null);
        echo "
\t\t\t\t<input type=\"submit\" accesskey=\"f\" tabindex=\"6\" name=\"preview\" value=\"";
        // line 150
        echo $this->env->getExtension('phpbb')->lang("FULL_EDITOR");
        echo "\" class=\"button1 alternate-submit-action\" id=\"qr_full_editor\" />&nbsp;
\t\t\t\t<input type=\"submit\" accesskey=\"s\" tabindex=\"7\" name=\"post\" value=\"";
        // line 151
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"button1 default-submit-action\" />&nbsp;
\t\t\t</fieldset>
\t\t</div>
\t</div>
";
        // line 155
        // line 156
        echo "</form>
";
    }

    public function getTemplateName()
    {
        return "quickreply_editor.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  511 => 156,  510 => 155,  503 => 151,  499 => 150,  494 => 149,  490 => 147,  480 => 139,  478 => 138,  473 => 136,  469 => 135,  452 => 120,  446 => 118,  444 => 117,  438 => 113,  424 => 112,  418 => 108,  417 => 107,  412 => 105,  409 => 104,  408 => 103,  403 => 100,  399 => 99,  396 => 98,  388 => 96,  385 => 95,  377 => 93,  374 => 92,  366 => 90,  363 => 89,  355 => 87,  353 => 86,  350 => 85,  346 => 84,  343 => 83,  335 => 81,  332 => 80,  324 => 78,  321 => 77,  313 => 75,  310 => 74,  302 => 72,  299 => 71,  289 => 69,  287 => 68,  284 => 67,  280 => 66,  277 => 65,  273 => 64,  270 => 63,  262 => 61,  259 => 60,  256 => 59,  237 => 57,  232 => 56,  230 => 55,  226 => 53,  214 => 52,  211 => 51,  207 => 49,  195 => 48,  192 => 47,  188 => 46,  186 => 45,  183 => 44,  177 => 42,  165 => 39,  160 => 38,  157 => 37,  155 => 36,  152 => 35,  146 => 32,  141 => 31,  138 => 30,  136 => 29,  133 => 28,  128 => 25,  105 => 24,  101 => 23,  95 => 21,  92 => 20,  90 => 19,  87 => 18,  81 => 17,  76 => 15,  72 => 13,  71 => 12,  67 => 11,  64 => 10,  59 => 7,  42 => 6,  33 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
