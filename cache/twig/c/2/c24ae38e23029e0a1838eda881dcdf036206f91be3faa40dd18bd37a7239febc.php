<?php

/* posting_poll_body.html */
class __TwigTemplate_c24ae38e23029e0a1838eda881dcdf036206f91be3faa40dd18bd37a7239febc extends Twig_Template
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
        echo "<div class=\"panel bg2\" id=\"poll-panel\">
\t<div class=\"inner\">

\t<h3>";
        // line 4
        echo $this->env->getExtension('phpbb')->lang("ADD_POLL");
        echo "</h3>

\t<fieldset class=\"fields2\">
\t";
        // line 7
        if ((isset($context["S_POLL_DELETE"]) ? $context["S_POLL_DELETE"] : null)) {
            // line 8
            echo "\t\t<dl>
\t\t\t<dt><label for=\"poll_delete\">";
            // line 9
            echo $this->env->getExtension('phpbb')->lang("POLL_DELETE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><label><input type=\"checkbox\" name=\"poll_delete\" id=\"poll_delete\"";
            // line 10
            if ((isset($context["S_POLL_DELETE_CHECKED"]) ? $context["S_POLL_DELETE_CHECKED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> </label></dd>
\t\t</dl>
\t";
        }
        // line 13
        echo "
\t";
        // line 14
        if ((isset($context["S_SHOW_POLL_BOX"]) ? $context["S_SHOW_POLL_BOX"] : null)) {
            // line 15
            echo "\t\t<dl>
\t\t\t<dt><label for=\"poll_title\">";
            // line 16
            echo $this->env->getExtension('phpbb')->lang("POLL_QUESTION");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><input type=\"text\" name=\"poll_title\" id=\"poll_title\" maxlength=\"255\" value=\"";
            // line 17
            echo (isset($context["POLL_TITLE"]) ? $context["POLL_TITLE"] : null);
            echo "\" class=\"inputbox\" /></dd>
\t\t</dl>

\t\t<div id=\"poll_hidden\">

\t\t<dl>
\t\t\t<dt><label for=\"poll_option_text\">";
            // line 23
            echo $this->env->getExtension('phpbb')->lang("POLL_OPTIONS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("POLL_OPTIONS_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd>
\t\t\t\t<textarea name=\"poll_option_text\" id=\"poll_option_text\" rows=\"7\" cols=\"35\" class=\"inputbox\">";
            // line 25
            echo (isset($context["POLL_OPTIONS"]) ? $context["POLL_OPTIONS"] : null);
            echo "</textarea>
\t\t\t\t";
            // line 26
            if ((isset($context["S_POLL_RESET"]) ? $context["S_POLL_RESET"] : null)) {
                echo "<br /><label><input type=\"checkbox\" name=\"poll_reset\" id=\"poll_reset\"";
                if ((isset($context["S_POLL_RESET_CHECKED"]) ? $context["S_POLL_RESET_CHECKED"] : null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("POLL_RESET");
                echo "</label>";
            }
            // line 27
            echo "\t\t\t</dd>
\t\t</dl>

\t\t<hr class=\"dashed\" />

\t\t<dl>
\t\t\t<dt><label for=\"poll_max_options\">";
            // line 33
            echo $this->env->getExtension('phpbb')->lang("POLL_MAX_OPTIONS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><input type=\"number\" min=\"0\" max=\"999\" name=\"poll_max_options\" id=\"poll_max_options\" size=\"3\" maxlength=\"3\" value=\"";
            // line 34
            echo (isset($context["POLL_MAX_OPTIONS"]) ? $context["POLL_MAX_OPTIONS"] : null);
            echo "\" class=\"inputbox\" /></dd>
\t\t\t<dd>";
            // line 35
            echo $this->env->getExtension('phpbb')->lang("POLL_MAX_OPTIONS_EXPLAIN");
            echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"poll_length\">";
            // line 38
            echo $this->env->getExtension('phpbb')->lang("POLL_FOR");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><label><input type=\"number\" min=\"0\" max=\"999\" name=\"poll_length\" id=\"poll_length\" size=\"3\" maxlength=\"3\" value=\"";
            // line 39
            echo (isset($context["POLL_LENGTH"]) ? $context["POLL_LENGTH"] : null);
            echo "\" class=\"inputbox\" /> ";
            echo $this->env->getExtension('phpbb')->lang("DAYS");
            echo "</label></dd>
\t\t\t<dd>";
            // line 40
            echo $this->env->getExtension('phpbb')->lang("POLL_FOR_EXPLAIN");
            echo "</dd>
\t\t</dl>

\t\t";
            // line 43
            if ((isset($context["S_POLL_VOTE_CHANGE"]) ? $context["S_POLL_VOTE_CHANGE"] : null)) {
                // line 44
                echo "\t\t\t<hr class=\"dashed\" />

\t\t\t<dl>
\t\t\t\t<dt><label for=\"poll_vote_change\">";
                // line 47
                echo $this->env->getExtension('phpbb')->lang("POLL_VOTE_CHANGE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><label><input type=\"checkbox\" id=\"poll_vote_change\" name=\"poll_vote_change\"";
                // line 48
                echo (isset($context["VOTE_CHANGE_CHECKED"]) ? $context["VOTE_CHANGE_CHECKED"] : null);
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("POLL_VOTE_CHANGE_EXPLAIN");
                echo "</label></dd>
\t\t\t</dl>
\t\t";
            }
            // line 51
            echo "
\t\t";
            // line 52
            if ((isset($context["S_POLL_SHOW_VOTERS"]) ? $context["S_POLL_SHOW_VOTERS"] : null)) {
                // line 53
                echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"poll_show_voters\">";
                // line 54
                echo $this->env->getExtension('phpbb')->lang("POLL_SHOW_VOTERS");
                echo ":</label></dt>
\t\t\t\t<dd><label><input type=\"checkbox\" id=\"poll_show_voters\" name=\"poll_show_voters\"";
                // line 55
                echo (isset($context["SHOW_VOTERS_CHECKED"]) ? $context["SHOW_VOTERS_CHECKED"] : null);
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("POLL_SHOW_VOTERS_EXPLAIN");
                echo "</label></dd>
\t\t\t</dl>
\t\t";
            }
            // line 58
            echo "
\t\t";
            // line 59
            // line 60
            echo "\t\t</div>
\t";
        }
        // line 62
        echo "\t</fieldset>

\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "posting_poll_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 62,  176 => 60,  175 => 59,  172 => 58,  164 => 55,  160 => 54,  157 => 53,  155 => 52,  152 => 51,  144 => 48,  139 => 47,  134 => 44,  132 => 43,  126 => 40,  120 => 39,  115 => 38,  109 => 35,  105 => 34,  100 => 33,  92 => 27,  82 => 26,  78 => 25,  70 => 23,  61 => 17,  56 => 16,  53 => 15,  51 => 14,  48 => 13,  40 => 10,  35 => 9,  32 => 8,  30 => 7,  24 => 4,  19 => 1,);
    }
}
