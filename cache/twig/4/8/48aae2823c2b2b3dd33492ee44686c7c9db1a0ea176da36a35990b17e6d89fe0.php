<?php

/* posting_editor.html */
class __TwigTemplate_48aae2823c2b2b3dd33492ee44686c7c9db1a0ea176da36a35990b17e6d89fe0 extends Twig_Template
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
        echo "<fieldset class=\"fields1\">
\t";
        // line 2
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            echo "<p class=\"error\">";
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "</p>";
        }
        // line 3
        echo "
\t";
        // line 4
        if (((isset($context["S_SHOW_TOPIC_ICONS"]) ? $context["S_SHOW_TOPIC_ICONS"] : null) || (isset($context["S_SHOW_PM_ICONS"]) ? $context["S_SHOW_PM_ICONS"] : null))) {
            // line 5
            echo "\t<dl>
\t\t<dt><label for=\"icon\">";
            // line 6
            echo $this->env->getExtension('phpbb')->lang("ICON");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"icon\"><input type=\"radio\" name=\"icon\" id=\"icon\" value=\"0\" checked=\"checked\" tabindex=\"1\" /> ";
            // line 8
            if ((isset($context["S_SHOW_TOPIC_ICONS"]) ? $context["S_SHOW_TOPIC_ICONS"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("NO_TOPIC_ICON");
            } else {
                echo $this->env->getExtension('phpbb')->lang("NO_PM_ICON");
            }
            echo "</label>
\t\t\t";
            // line 9
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
                echo " tabindex=\"1\" /><img src=\"";
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
            // line 10
            echo "\t\t</dd>
\t</dl>
\t";
        }
        // line 13
        echo "
\t";
        // line 14
        if (( !(isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null) && (isset($context["S_DISPLAY_USERNAME"]) ? $context["S_DISPLAY_USERNAME"] : null))) {
            // line 15
            echo "\t<dl style=\"clear: left;\">
\t\t<dt><label for=\"username\">";
            // line 16
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"60\" maxlength=\"35\" value=\"";
            // line 17
            echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
            echo "\" class=\"inputbox autowidth\" /></dd>
\t</dl>
\t";
        }
        // line 20
        echo "
\t";
        // line 21
        // line 22
        echo "
\t";
        // line 23
        if ((((isset($context["S_POST_ACTION"]) ? $context["S_POST_ACTION"] : null) || (isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null)) || (isset($context["S_EDIT_DRAFT"]) ? $context["S_EDIT_DRAFT"] : null))) {
            // line 24
            echo "\t<dl style=\"clear: left;\">
\t\t<dt><label for=\"subject\">";
            // line 25
            echo $this->env->getExtension('phpbb')->lang("SUBJECT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"text\" name=\"subject\" id=\"subject\" size=\"60\" maxlength=\"";
            // line 26
            if ((isset($context["S_NEW_MESSAGE"]) ? $context["S_NEW_MESSAGE"] : null)) {
                echo "120";
            } else {
                echo "124";
            }
            echo "\" tabindex=\"2\" value=\"";
            echo (isset($context["SUBJECT"]) ? $context["SUBJECT"] : null);
            echo (isset($context["DRAFT_SUBJECT"]) ? $context["DRAFT_SUBJECT"] : null);
            echo "\" class=\"inputbox autowidth\" /></dd>
\t</dl>
\t";
            // line 28
            if (((isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null) && (isset($context["S_CONFIRM_CODE"]) ? $context["S_CONFIRM_CODE"] : null))) {
                // line 29
                echo "\t\t";
                $value = 3;
                $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
                // line 30
                echo "\t\t";
                $location = (("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . "");
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate((("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . ""), "posting_editor.html", 30)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 31
                echo "\t";
            }
            // line 32
            echo "\t";
        }
        // line 33
        echo "
\t";
        // line 34
        // line 35
        echo "
\t";
        // line 36
        $location = "posting_buttons.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("posting_buttons.html", "posting_editor.html", 36)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 37
        echo "
\t<div id=\"smiley-box\">
\t\t";
        // line 39
        echo "\t
\t\t";
        // line 40
        if (((isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "smiley", array())))) {
            // line 41
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "smiley", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["smiley"]) {
                // line 42
                echo "\t\t\t\t<img src=\"";
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
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smiley'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "\t\t";
        }
        // line 45
        echo "\t\t";
        if (((isset($context["S_SHOW_SMILEY_LINK"]) ? $context["S_SHOW_SMILEY_LINK"] : null) && (isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null))) {
            // line 46
            echo "\t\t\t<a href=\"";
            echo (isset($context["U_MORE_SMILIES"]) ? $context["U_MORE_SMILIES"] : null);
            echo "\" onclick=\"popup(this.href, 750, 350, '_phpbbsmilies'); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("MORE_SMILIES");
            echo "</a>
\t\t";
        }
        // line 48
        echo "\t\t";
        // line 49
        echo "\t\t";
        if (((isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "smiley", array())))) {
            echo "<hr />";
        }
        // line 50
        echo "
\t\t";
        // line 51
        // line 52
        echo "\t\t";
        if ((isset($context["S_FIRST_POST_SHOW_ALLOWED"]) ? $context["S_FIRST_POST_SHOW_ALLOWED"] : null)) {
            // line 53
            echo "\t\t\t<label for=\"topic_first_post_show\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("FIRST_POST_SHOW_EXPLAIN");
            echo "\"><input type=\"checkbox\" name=\"topic_first_post_show\" id=\"topic_first_post_show\"";
            echo (isset($context["S_FIRST_POST_SHOW_CHECKED"]) ? $context["S_FIRST_POST_SHOW_CHECKED"] : null);
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("FIRST_POST_SHOW");
            echo "</label>
\t\t";
        }
        // line 55
        echo "\t\t";
        if ((isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null)) {
            // line 56
            echo "\t\t\t<label for=\"disable_bbcode\"><input type=\"checkbox\" name=\"disable_bbcode\" id=\"disable_bbcode\"";
            echo (isset($context["S_BBCODE_CHECKED"]) ? $context["S_BBCODE_CHECKED"] : null);
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("DISABLE_BBCODE");
            echo "</label>
\t\t";
        }
        // line 58
        echo "\t\t";
        if ((isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null)) {
            // line 59
            echo "\t\t\t<label for=\"disable_smilies\"><input type=\"checkbox\" name=\"disable_smilies\" id=\"disable_smilies\"";
            echo (isset($context["S_SMILIES_CHECKED"]) ? $context["S_SMILIES_CHECKED"] : null);
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("DISABLE_SMILIES");
            echo "</label>
\t\t";
        }
        // line 61
        echo "\t\t";
        if ((isset($context["S_LINKS_ALLOWED"]) ? $context["S_LINKS_ALLOWED"] : null)) {
            // line 62
            echo "\t\t\t<label for=\"disable_magic_url\"><input type=\"checkbox\" name=\"disable_magic_url\" id=\"disable_magic_url\"";
            echo (isset($context["S_MAGIC_URL_CHECKED"]) ? $context["S_MAGIC_URL_CHECKED"] : null);
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("DISABLE_MAGIC_URL");
            echo "</label>
\t\t";
        }
        // line 64
        echo "\t\t";
        if ((isset($context["S_SIG_ALLOWED"]) ? $context["S_SIG_ALLOWED"] : null)) {
            // line 65
            echo "\t\t\t<label for=\"attach_sig\"><input type=\"checkbox\" name=\"attach_sig\" id=\"attach_sig\"";
            echo (isset($context["S_SIGNATURE_CHECKED"]) ? $context["S_SIGNATURE_CHECKED"] : null);
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("ATTACH_SIG");
            echo "</label>
\t\t";
        }
        // line 67
        echo "
\t\t";
        // line 68
        if (((((isset($context["S_DO_MERGE_ALLOWED"]) ? $context["S_DO_MERGE_ALLOWED"] : null) || (isset($context["S_LOCK_POST_ALLOWED"]) ? $context["S_LOCK_POST_ALLOWED"] : null)) || (isset($context["S_LOCK_TOPIC_ALLOWED"]) ? $context["S_LOCK_TOPIC_ALLOWED"] : null)) || (isset($context["S_NOTIFY_ALLOWED"]) ? $context["S_NOTIFY_ALLOWED"] : null))) {
            echo "<hr />";
        }
        // line 69
        echo "
\t\t";
        // line 70
        if ((isset($context["S_DO_MERGE_ALLOWED"]) ? $context["S_DO_MERGE_ALLOWED"] : null)) {
            // line 71
            echo "\t\t\t<label for=\"do_merge\"><input type=\"checkbox\" name=\"do_merge\" id=\"do_merge\"";
            echo (isset($context["S_DO_MERGE_CHECKED"]) ? $context["S_DO_MERGE_CHECKED"] : null);
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("DO_MERGE");
            echo "</label>
\t\t";
        }
        // line 73
        echo "\t\t";
        if ((isset($context["S_NOTIFY_ALLOWED"]) ? $context["S_NOTIFY_ALLOWED"] : null)) {
            // line 74
            echo "\t\t\t<label for=\"notify\"><input type=\"checkbox\" name=\"notify\" id=\"notify\"";
            echo (isset($context["S_NOTIFY_CHECKED"]) ? $context["S_NOTIFY_CHECKED"] : null);
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NOTIFY_REPLY");
            echo "</label>
\t\t";
        }
        // line 76
        echo "\t\t";
        if ((isset($context["S_LOCK_TOPIC_ALLOWED"]) ? $context["S_LOCK_TOPIC_ALLOWED"] : null)) {
            // line 77
            echo "\t\t\t<label for=\"lock_topic\"><input type=\"checkbox\" name=\"lock_topic\" id=\"lock_topic\"";
            echo (isset($context["S_LOCK_TOPIC_CHECKED"]) ? $context["S_LOCK_TOPIC_CHECKED"] : null);
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("LOCK_TOPIC");
            echo "</label>
\t\t";
        }
        // line 79
        echo "\t\t";
        if ((isset($context["S_LOCK_POST_ALLOWED"]) ? $context["S_LOCK_POST_ALLOWED"] : null)) {
            // line 80
            echo "\t\t\t<label for=\"lock_post\"><input type=\"checkbox\" name=\"lock_post\" id=\"lock_post\"";
            echo (isset($context["S_LOCK_POST_CHECKED"]) ? $context["S_LOCK_POST_CHECKED"] : null);
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("LOCK_POST_EXPLAIN");
            echo "</label>
\t\t";
        }
        // line 82
        echo "\t\t";
        // line 83
        echo "\t</div>

\t";
        // line 85
        // line 86
        echo "
\t<div id=\"message-box\">
\t\t<textarea ";
        // line 88
        if ((((isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null) &&  !(isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null)) &&  !(isset($context["S_EDIT_DRAFT"]) ? $context["S_EDIT_DRAFT"] : null))) {
            echo "name=\"signature\" id=\"signature\" style=\"height: 9em;\"";
        } else {
            echo "name=\"message\" id=\"message\"";
        }
        echo " rows=\"15\" cols=\"76\" tabindex=\"4\" onselect=\"storeCaret(this);\" onclick=\"storeCaret(this);\" onkeyup=\"storeCaret(this);\" onfocus=\"initInsertions();\" class=\"inputbox\">";
        echo (isset($context["MESSAGE"]) ? $context["MESSAGE"] : null);
        echo (isset($context["DRAFT_MESSAGE"]) ? $context["DRAFT_MESSAGE"] : null);
        echo (isset($context["SIGNATURE"]) ? $context["SIGNATURE"] : null);
        echo "</textarea>
\t</div>

\t";
        // line 91
        // line 92
        echo "\t</fieldset>

";
        // line 94
        if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "EXTRA_POSTING_OPTIONS", array()) == 1)) {
            // line 95
            echo "
\t";
            // line 96
            if ( !(isset($context["S_SHOW_DRAFTS"]) ? $context["S_SHOW_DRAFTS"] : null)) {
                // line 97
                echo "\t\t</div>
\t</div>
\t";
            }
            // line 100
            echo "
\t";
            // line 101
            if (((isset($context["S_SHOW_ATTACH_BOX"]) ? $context["S_SHOW_ATTACH_BOX"] : null) || (isset($context["S_HAS_ATTACHMENTS"]) ? $context["S_HAS_ATTACHMENTS"] : null))) {
                $location = "posting_attach_body.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("posting_attach_body.html", "posting_editor.html", 101)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
            }
            // line 102
            echo "\t";
            if (((isset($context["S_SHOW_POLL_BOX"]) ? $context["S_SHOW_POLL_BOX"] : null) || (isset($context["S_POLL_DELETE"]) ? $context["S_POLL_DELETE"] : null))) {
                $location = "posting_poll_body.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("posting_poll_body.html", "posting_editor.html", 102)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
            }
            // line 103
            echo "\t\t\t";
            // line 104
            echo "\t\t\t\t";
            // line 105
            echo "
\t";
            // line 106
            if (( !(isset($context["S_SHOW_DRAFTS"]) ? $context["S_SHOW_DRAFTS"] : null) && ( !$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SIG_EDIT", array()) == 1))) {
                // line 107
                echo "\t<div class=\"panel bg2\">
\t\t<div class=\"inner\">

\t\t";
                // line 110
                if ((((((isset($context["S_TYPE_TOGGLE"]) ? $context["S_TYPE_TOGGLE"] : null) || (isset($context["S_TOPIC_TYPE_ANNOUNCE"]) ? $context["S_TOPIC_TYPE_ANNOUNCE"] : null)) || (isset($context["S_TOPIC_TYPE_STICKY"]) ? $context["S_TOPIC_TYPE_STICKY"] : null)) || (isset($context["S_EDIT_REASON"]) ? $context["S_EDIT_REASON"] : null)) || (isset($context["S_DELETE_ALLOWED"]) ? $context["S_DELETE_ALLOWED"] : null))) {
                    // line 111
                    echo "\t\t<fieldset class=\"fields2\">
\t\t\t";
                    // line 112
                    if ((isset($context["S_TYPE_TOGGLE"]) ? $context["S_TYPE_TOGGLE"] : null)) {
                        // line 113
                        echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"topic_type-0\">";
                        // line 114
                        if ((isset($context["S_EDIT_POST"]) ? $context["S_EDIT_POST"] : null)) {
                            echo $this->env->getExtension('phpbb')->lang("CHANGE_TOPIC_TO");
                        } else {
                            echo $this->env->getExtension('phpbb')->lang("POST_TOPIC_AS");
                        }
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo "</label></dt>
\t\t\t\t<dd>";
                        // line 115
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topic_type", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["topic_type"]) {
                            echo "<label for=\"topic_type-";
                            echo $this->getAttribute($context["topic_type"], "VALUE", array());
                            echo "\"><input type=\"radio\" name=\"topic_type\" id=\"topic_type-";
                            echo $this->getAttribute($context["topic_type"], "VALUE", array());
                            echo "\" value=\"";
                            echo $this->getAttribute($context["topic_type"], "VALUE", array());
                            echo "\"";
                            echo $this->getAttribute($context["topic_type"], "S_CHECKED", array());
                            echo " />";
                            echo $this->getAttribute($context["topic_type"], "L_TOPIC_TYPE", array());
                            echo "</label> ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_type'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</dd>
\t\t\t</dl>
\t\t\t";
                    }
                    // line 118
                    echo "
\t\t\t";
                    // line 119
                    if (((isset($context["S_TOPIC_TYPE_ANNOUNCE"]) ? $context["S_TOPIC_TYPE_ANNOUNCE"] : null) || (isset($context["S_TOPIC_TYPE_STICKY"]) ? $context["S_TOPIC_TYPE_STICKY"] : null))) {
                        // line 120
                        echo "\t\t\t<dl class=\"only-for-announces\">
\t\t\t\t<dt><label for=\"topic_time_limit\">";
                        // line 121
                        echo $this->env->getExtension('phpbb')->lang("STICK_TOPIC_FOR");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo "</label></dt>
\t\t\t\t<dd><label for=\"topic_time_limit\"><input type=\"number\" min=\"0\" max=\"999\" name=\"topic_time_limit\" id=\"topic_time_limit\" size=\"3\" maxlength=\"3\" value=\"";
                        // line 122
                        echo (isset($context["TOPIC_TIME_LIMIT"]) ? $context["TOPIC_TIME_LIMIT"] : null);
                        echo "\" class=\"inputbox\" /> ";
                        echo $this->env->getExtension('phpbb')->lang("DAYS");
                        echo " ";
                        echo $this->env->getExtension('phpbb')->lang("STICK_TOPIC_FOR_EXPLAIN");
                        echo "</label></dd>
\t\t\t</dl>
\t\t\t<dl class=\"only-for-announces\">
\t\t\t\t<dt><label for=\"topic_priority\">";
                        // line 125
                        echo $this->env->getExtension('phpbb')->lang("TOPIC_PRIORITY");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo "</label></dt>
\t\t\t\t<dd><label for=\"topic_priority\"><input type=\"number\" min=\"0\" max=\"999\" name=\"topic_priority\" id=\"topic_priority\" size=\"3\" maxlength=\"3\" value=\"";
                        // line 126
                        echo (isset($context["TOPIC_PRIORITY"]) ? $context["TOPIC_PRIORITY"] : null);
                        echo "\" class=\"inputbox\" /> ";
                        echo $this->env->getExtension('phpbb')->lang("TOPIC_PRIORITY_EXPLAIN");
                        echo "</label></dd>
 \t\t\t</dl>
\t\t\t";
                    }
                    // line 129
                    echo "
\t\t\t";
                    // line 130
                    if (((isset($context["S_SOFTDELETE_ALLOWED"]) ? $context["S_SOFTDELETE_ALLOWED"] : null) || (isset($context["S_DELETE_ALLOWED"]) ? $context["S_DELETE_ALLOWED"] : null))) {
                        // line 131
                        echo "\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"delete\">";
                        // line 132
                        echo $this->env->getExtension('phpbb')->lang("DELETE_POST");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo "</label></dt>
\t\t\t\t\t<dd><label for=\"delete\"><input type=\"checkbox\" name=\"delete\" id=\"delete\" ";
                        // line 133
                        echo (isset($context["S_SOFTDELETE_CHECKED"]) ? $context["S_SOFTDELETE_CHECKED"] : null);
                        echo " /> ";
                        echo $this->env->getExtension('phpbb')->lang("DELETE_POST_WARN");
                        echo "</label></dd>
\t\t\t\t\t";
                        // line 134
                        if (((isset($context["S_DELETE_ALLOWED"]) ? $context["S_DELETE_ALLOWED"] : null) && (isset($context["S_SOFTDELETE_ALLOWED"]) ? $context["S_SOFTDELETE_ALLOWED"] : null))) {
                            // line 135
                            echo "\t\t\t\t\t\t<dd><label for=\"delete_permanent\"><input type=\"checkbox\" name=\"delete_permanent\" id=\"delete_permanent\" /> ";
                            echo $this->env->getExtension('phpbb')->lang("DELETE_POST_PERMANENTLY");
                            echo "</label></dd>
\t\t\t\t\t";
                        }
                        // line 137
                        echo "\t\t\t\t</dl>
\t\t\t";
                    }
                    // line 139
                    echo "
\t\t\t";
                    // line 140
                    if ((isset($context["S_EDIT_REASON"]) ? $context["S_EDIT_REASON"] : null)) {
                        // line 141
                        echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"edit_reason\">";
                        // line 142
                        echo $this->env->getExtension('phpbb')->lang("EDIT_REASON");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo "</label></dt>
\t\t\t\t<dd><input type=\"text\" name=\"edit_reason\" id=\"edit_reason\" value=\"";
                        // line 143
                        echo (isset($context["EDIT_REASON"]) ? $context["EDIT_REASON"] : null);
                        echo "\" class=\"inputbox\" /></dd>
\t\t\t</dl>
\t\t\t";
                    }
                    // line 146
                    echo "\t\t</fieldset>
\t\t";
                }
                // line 148
                echo "
\t\t<fieldset class=\"submit-buttons\">
\t\t\t";
                // line 150
                echo (isset($context["S_HIDDEN_ADDRESS_FIELD"]) ? $context["S_HIDDEN_ADDRESS_FIELD"] : null);
                echo "
\t\t\t";
                // line 151
                echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t";
                // line 152
                if ((isset($context["S_HAS_DRAFTS"]) ? $context["S_HAS_DRAFTS"] : null)) {
                    echo "<input type=\"submit\" accesskey=\"d\" tabindex=\"8\" name=\"load\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("LOAD_DRAFT");
                    echo "\" class=\"button2\" onclick=\"load_draft = true;\" />&nbsp; ";
                }
                // line 153
                echo "\t\t\t";
                if ((isset($context["S_SAVE_ALLOWED"]) ? $context["S_SAVE_ALLOWED"] : null)) {
                    echo "<input type=\"submit\" accesskey=\"k\" tabindex=\"7\" name=\"save\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("SAVE_DRAFT");
                    echo "\" class=\"button2\" />&nbsp; ";
                }
                // line 154
                echo "\t\t\t<input type=\"submit\" tabindex=\"5\" name=\"preview\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("PREVIEW");
                echo "\" class=\"button1 alternate-submit-action\" />&nbsp;
\t\t\t<input type=\"submit\" accesskey=\"s\" tabindex=\"6\" name=\"post\" value=\"";
                // line 155
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" class=\"button1 default-submit-action\" />&nbsp;

\t\t</fieldset>
\t\t</div>
\t</div>
\t";
            }
            // line 161
            echo "
\t<div class=\"panel bg3\" style=\"display: none;\">
\t\t<div class=\"inner\">

";
        }
    }

    public function getTemplateName()
    {
        return "posting_editor.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  597 => 161,  588 => 155,  583 => 154,  576 => 153,  570 => 152,  566 => 151,  562 => 150,  558 => 148,  554 => 146,  548 => 143,  543 => 142,  540 => 141,  538 => 140,  535 => 139,  531 => 137,  525 => 135,  523 => 134,  517 => 133,  512 => 132,  509 => 131,  507 => 130,  504 => 129,  496 => 126,  491 => 125,  481 => 122,  476 => 121,  473 => 120,  471 => 119,  468 => 118,  445 => 115,  436 => 114,  433 => 113,  431 => 112,  428 => 111,  426 => 110,  421 => 107,  419 => 106,  416 => 105,  414 => 104,  412 => 103,  397 => 102,  383 => 101,  380 => 100,  375 => 97,  373 => 96,  370 => 95,  368 => 94,  364 => 92,  363 => 91,  349 => 88,  345 => 86,  344 => 85,  340 => 83,  338 => 82,  330 => 80,  327 => 79,  319 => 77,  316 => 76,  308 => 74,  305 => 73,  297 => 71,  295 => 70,  292 => 69,  288 => 68,  285 => 67,  277 => 65,  274 => 64,  266 => 62,  263 => 61,  255 => 59,  252 => 58,  244 => 56,  241 => 55,  231 => 53,  228 => 52,  227 => 51,  224 => 50,  219 => 49,  217 => 48,  209 => 46,  206 => 45,  203 => 44,  184 => 42,  179 => 41,  177 => 40,  174 => 39,  170 => 37,  158 => 36,  155 => 35,  154 => 34,  151 => 33,  148 => 32,  145 => 31,  132 => 30,  128 => 29,  126 => 28,  114 => 26,  109 => 25,  106 => 24,  104 => 23,  101 => 22,  100 => 21,  97 => 20,  91 => 17,  86 => 16,  83 => 15,  81 => 14,  78 => 13,  73 => 10,  50 => 9,  42 => 8,  36 => 6,  33 => 5,  31 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }
}
