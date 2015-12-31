<?php

/* posting_buttons.html */
class __TwigTemplate_f20d2844c191c3d1a8e5bd6aa5a8ad0cd3bcc967aaaf22c6dbbe75cfedf4a895 extends Twig_Template
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
        echo "
<script>
\tvar form_name = 'postform';
\tvar text_name = ";
        // line 4
        if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SIG_EDIT", array())) {
            echo "'signature'";
        } else {
            echo "'message'";
        }
        echo ";
\tvar load_draft = false;
\tvar upload = false;

\tvar lang = {};
\tlang.enter_link_url = '";
        // line 9
        echo addslashes($this->env->getExtension('phpbb')->lang("ENTER_LINK_URL"));
        echo "';
\tlang.enter_image_url = '";
        // line 10
        echo addslashes($this->env->getExtension('phpbb')->lang("ENTER_IMAGE_URL"));
        echo "';
\tlang.enter_quote_name = '";
        // line 11
        echo addslashes($this->env->getExtension('phpbb')->lang("ENTER_QUOTE_NAME"));
        echo "';
\tlang.enter_list_start = '";
        // line 12
        echo addslashes($this->env->getExtension('phpbb')->lang("ENTER_LIST_START"));
        echo "';
\tlang.enter_title = '";
        // line 13
        echo addslashes($this->env->getExtension('phpbb')->lang("ENTER_TITLE"));
        echo "';

\t// Define the bbCode tags
\tvar bbcode = new Array();
\tvar bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[list]','[/list]','[tt]','[/tt]','[img]','[/img]','[url]','[/url]','[flash=]', '[/flash]','[size=]','[/size]','[s]','[/s]','[spoiler]','[/spoiler]'";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            echo ", ";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_NAME", array());
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ");

\tfunction change_palette()
\t{
\t\tphpbb.toggleDisplay('colour_palette');
\t\te = document.getElementById('colour_palette');

\t\tif (e.style.display == 'block')
\t\t{
\t\t\tdocument.getElementById('bbpalette').innerHTML = '";
        // line 26
        echo addslashes($this->env->getExtension('phpbb')->lang("FONT_COLOR_HIDE"));
        echo "';
\t\t}
\t\telse
\t\t{
\t\t\tdocument.getElementById('bbpalette').innerHTML = '";
        // line 30
        echo addslashes($this->env->getExtension('phpbb')->lang("FONT_COLOR"));
        echo "';
\t\t}
\t}
</script>
";
        // line 34
        $asset_file = (("" . (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null)) . "/javascript/editor.js");
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('1');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 35
        echo "
";
        // line 36
        if ((isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null)) {
            // line 37
            // line 38
            echo "<div id=\"format-buttons\">
\t<button type=\"button\" accesskey=\"b\" style=\"width: 24px;\" onclick=\"bbstyle(0)\" title=\"";
            // line 39
            echo $this->env->getExtension('phpbb')->lang("BBCODE_B_HELP");
            echo "\"><span style=\"font-weight: bold;\">B</span></button>
\t<button type=\"button\" accesskey=\"i\" style=\"width: 24px;\" onclick=\"bbstyle(2)\" title=\"";
            // line 40
            echo $this->env->getExtension('phpbb')->lang("BBCODE_I_HELP");
            echo "\"><span style=\"font-style: italic;\">I</span></button>
\t<button type=\"button\" accesskey=\"u\" style=\"width: 24px;\" onclick=\"bbstyle(4)\" title=\"";
            // line 41
            echo $this->env->getExtension('phpbb')->lang("BBCODE_U_HELP");
            echo "\"><span style=\"text-decoration: underline;\">U</span></button>
\t<button type=\"button\" accesskey=\"s\" style=\"width: 24px;\" onclick=\"bbstyle(22)\" title=\"";
            // line 42
            echo $this->env->getExtension('phpbb')->lang("BBCODE_STRIKE_HELP");
            echo "\"><span style=\"text-decoration: line-through;\">&nbsp;S&nbsp;</span></button>
\t<button type=\"button\" accesskey=\"t\" style=\"width: 24px;\" onclick=\"bbstyle(12)\" title=\"";
            // line 43
            echo $this->env->getExtension('phpbb')->lang("BBCODE_TT_HELP");
            echo "\"><span style=\"font: 1em/1em monospace;\">TT</span></button>
\t";
            // line 44
            if ((isset($context["S_BBCODE_QUOTE"]) ? $context["S_BBCODE_QUOTE"] : null)) {
                // line 45
                echo "\t\t<button type=\"button\" accesskey=\"q\" onclick=\"bbstyle(6, event)\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BBCODE_Q_HELP");
                echo " (";
                echo $this->env->getExtension('phpbb')->lang("BBCODE_Q_HELP_CTRL");
                echo ")\">Quote</button>
\t";
            }
            // line 47
            echo "\t";
            if ((isset($context["S_BBCODE_SPOILER"]) ? $context["S_BBCODE_SPOILER"] : null)) {
                // line 48
                echo "\t\t<button type=\"button\" accesskey=\"h\" onclick=\"bbstyle(24, event)\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BBCODE_SPOILER_HELP");
                echo " (";
                echo $this->env->getExtension('phpbb')->lang("BBCODE_SPOILER_HELP_CTRL");
                echo ")\">Spoiler</button>
\t";
            }
            // line 50
            echo "\t<button type=\"button\" accesskey=\"c\" onclick=\"bbstyle(8)\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("BBCODE_C_HELP");
            echo "\">Code</button>
\t<button type=\"button\" accesskey=\"l\" onclick=\"bbstyle(10, event)\" title=\"";
            // line 51
            echo $this->env->getExtension('phpbb')->lang("BBCODE_L_HELP");
            echo " (";
            echo $this->env->getExtension('phpbb')->lang("BBCODE_L_HELP_CTRL");
            echo ")\">List</button>
\t<button type=\"button\" accesskey=\"y\" onclick=\"insert_listitem()\" title=\"";
            // line 52
            echo $this->env->getExtension('phpbb')->lang("BBCODE_LISTITEM_HELP_EX");
            echo "\">[*]</button>
\t";
            // line 53
            if ((isset($context["S_BBCODE_IMG"]) ? $context["S_BBCODE_IMG"] : null)) {
                // line 54
                echo "\t\t<button type=\"button\" accesskey=\"p\" onclick=\"bbstyle(14)\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BBCODE_P_HELP");
                echo "\">Img</button>
\t";
            }
            // line 56
            echo "\t";
            if ((isset($context["S_LINKS_ALLOWED"]) ? $context["S_LINKS_ALLOWED"] : null)) {
                // line 57
                echo "\t\t<button type=\"button\" accesskey=\"w\" onclick=\"bbstyle(16)\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BBCODE_W_HELP");
                echo "\"><span style=\"text-decoration: underline;\">URL</span></button>
\t";
            }
            // line 59
            echo "\t";
            if ((isset($context["S_BBCODE_FLASH"]) ? $context["S_BBCODE_FLASH"] : null)) {
                // line 60
                echo "\t\t<button type=\"button\" accesskey=\"d\" onclick=\"bbstyle(18)\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BBCODE_D_HELP");
                echo "\">Flash</button>
\t";
            }
            // line 62
            echo "\t";
            if ((((isset($context["MIN_FONT_SIZE"]) ? $context["MIN_FONT_SIZE"] : null) != 100) || ((isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) != 100))) {
                // line 63
                echo "\t\t<select name=\"addbbcode20\" class=\"bbcode-size\" onchange=\"bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]');jQuery('option[value=100]', this).prop('selected', true);\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BBCODE_F_HELP");
                echo "\">
\t\t\t";
                // line 64
                if (( !(isset($context["MIN_FONT_SIZE"]) ? $context["MIN_FONT_SIZE"] : null) || ((isset($context["MIN_FONT_SIZE"]) ? $context["MIN_FONT_SIZE"] : null) <= 50))) {
                    echo "<option value=\"50\">";
                    echo $this->env->getExtension('phpbb')->lang("FONT_TINY");
                    echo "</option>";
                }
                // line 65
                echo "\t\t\t";
                if (( !(isset($context["MIN_FONT_SIZE"]) ? $context["MIN_FONT_SIZE"] : null) || ((isset($context["MIN_FONT_SIZE"]) ? $context["MIN_FONT_SIZE"] : null) <= 85))) {
                    echo "<option value=\"85\">";
                    echo $this->env->getExtension('phpbb')->lang("FONT_SMALL");
                    echo "</option>";
                }
                // line 66
                echo "\t\t\t<option value=\"100\" selected=\"selected\">";
                echo $this->env->getExtension('phpbb')->lang("FONT_NORMAL");
                echo "</option>
\t\t\t";
                // line 67
                if (( !(isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) || ((isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) >= 150))) {
                    echo "<option value=\"150\">";
                    echo $this->env->getExtension('phpbb')->lang("FONT_LARGE");
                    echo "</option>";
                }
                // line 68
                echo "\t\t\t";
                if (( !(isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) || ((isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) >= 200))) {
                    echo "<option value=\"200\">";
                    echo $this->env->getExtension('phpbb')->lang("FONT_HUGE");
                    echo "</option>";
                }
                // line 69
                echo "\t\t</select>
\t";
            }
            // line 71
            echo "\t<button type=\"button\" onclick=\"change_palette();\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("BBCODE_S_HELP");
            echo "\" id=\"bbpalette\">";
            echo $this->env->getExtension('phpbb')->lang("FONT_COLOR");
            echo "</button>

\t";
            // line 73
            // line 74
            echo "
\t";
            // line 75
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
                // line 76
                echo "\t\t<button type=\"button\" onclick=\"bbstyle(";
                echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
                echo ")\" title=\"";
                echo $this->getAttribute($context["custom_tags"], "BBCODE_HELPLINE", array());
                echo "\">";
                echo $this->getAttribute($context["custom_tags"], "BBCODE_TAG", array());
                echo "</button>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "</div>

<div id=\"colour_palette\">
\t<dl style=\"clear: left;\">
\t\t<dt><label>";
            // line 82
            echo $this->env->getExtension('phpbb')->lang("FONT_COLOR");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd id=\"color_palette_placeholder\" data-orientation=\"h\" data-height=\"12\" data-width=\"15\" data-bbcode=\"true\"></dd>
\t</dl>
</div>
";
            // line 86
        }
    }

    public function getTemplateName()
    {
        return "posting_buttons.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 86,  277 => 82,  271 => 78,  258 => 76,  254 => 75,  251 => 74,  250 => 73,  242 => 71,  238 => 69,  231 => 68,  225 => 67,  220 => 66,  213 => 65,  207 => 64,  202 => 63,  199 => 62,  193 => 60,  190 => 59,  184 => 57,  181 => 56,  175 => 54,  173 => 53,  169 => 52,  163 => 51,  158 => 50,  150 => 48,  147 => 47,  139 => 45,  137 => 44,  133 => 43,  129 => 42,  125 => 41,  121 => 40,  117 => 39,  114 => 38,  113 => 37,  111 => 36,  108 => 35,  93 => 34,  86 => 30,  79 => 26,  59 => 17,  52 => 13,  48 => 12,  44 => 11,  40 => 10,  36 => 9,  24 => 4,  19 => 1,);
    }
}
