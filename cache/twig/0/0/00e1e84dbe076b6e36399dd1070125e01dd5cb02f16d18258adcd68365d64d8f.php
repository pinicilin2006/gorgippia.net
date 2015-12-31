<?php

/* acp_posting_buttons.html */
class __TwigTemplate_00e1e84dbe076b6e36399dd1070125e01dd5cb02f16d18258adcd68365d64d8f extends Twig_Template
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
        echo "<script>
\tvar lang = {};
\tlang.enter_link_url = '";
        // line 3
        echo addslashes($this->env->getExtension('phpbb')->lang("ENTER_LINK_URL"));
        echo "';
\tlang.enter_image_url = '";
        // line 4
        echo addslashes($this->env->getExtension('phpbb')->lang("ENTER_IMAGE_URL"));
        echo "';
\tlang.enter_quote_name = '";
        // line 5
        echo addslashes($this->env->getExtension('phpbb')->lang("ENTER_QUOTE_NAME"));
        echo "';
\tlang.enter_list_start = '";
        // line 6
        echo addslashes($this->env->getExtension('phpbb')->lang("ENTER_LIST_START"));
        echo "';
\tlang.enter_title = '";
        // line 7
        echo addslashes($this->env->getExtension('phpbb')->lang("ENTER_TITLE"));
        echo "';

\t// Define the bbCode tags
\tvar bbcode = new Array();
\tvar bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[list]','[/list]','[tt]','[/tt]','[img]','[/img]','[url]','[/url]','[flash=]', '[/flash]','[size=]','[/size]','[s]','[/s]','[spoiler]','[/spoiler]'";
        // line 11
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
</script>

";
        // line 14
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
        // line 15
        echo "
";
        // line 16
        // line 17
        echo "<div id=\"format-buttons\">
\t<input type=\"button\" class=\"button2\" accesskey=\"b\" name=\"addbbcode0\" value=\" B \" style=\"font-weight:bold; width: 30px\" onclick=\"bbstyle(0)\" title=\"";
        // line 18
        echo $this->env->getExtension('phpbb')->lang("BBCODE_B_HELP");
        echo "\" />
\t<input type=\"button\" class=\"button2\" accesskey=\"i\" name=\"addbbcode2\" value=\" i \" style=\"font-style:italic; width: 30px\" onclick=\"bbstyle(2)\" title=\"";
        // line 19
        echo $this->env->getExtension('phpbb')->lang("BBCODE_I_HELP");
        echo "\" />
\t<input type=\"button\" class=\"button2\" accesskey=\"u\" name=\"addbbcode4\" value=\" u \" style=\"text-decoration: underline; width: 30px\" onclick=\"bbstyle(4)\" title=\"";
        // line 20
        echo $this->env->getExtension('phpbb')->lang("BBCODE_U_HELP");
        echo "\" />

\t<input type=\"button\" class=\"button2\" accesskey=\"s\" name=\"addbbcode22\" value=\" S \" style=\"text-decoration: line-through; width: 30px\" onclick=\"bbstyle(22)\" title=\"";
        // line 22
        echo $this->env->getExtension('phpbb')->lang("BBCODE_STRIKE_HELP");
        echo "\" />
\t<input type=\"button\" class=\"button2\" accesskey=\"t\" name=\"addbbcode12\" value=\" TT \" style=\"font: 1em/1em monospace; width: 30px; padding-top: 2px;\" onclick=\"bbstyle(12)\" title=\"";
        // line 23
        echo $this->env->getExtension('phpbb')->lang("BBCODE_TT_HELP");
        echo "\" />
\t";
        // line 24
        if ((isset($context["S_BBCODE_QUOTE"]) ? $context["S_BBCODE_QUOTE"] : null)) {
            // line 25
            echo "\t\t<input type=\"button\" class=\"button2\" accesskey=\"q\" name=\"addbbcode6\" value=\"Quote\" style=\"width: 50px\" onclick=\"bbstyle(6, event)\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("BBCODE_Q_HELP");
            echo "\" />
\t";
        }
        // line 27
        echo "\t";
        if ((isset($context["S_BBCODE_SPOILER"]) ? $context["S_BBCODE_SPOILER"] : null)) {
            // line 28
            echo "\t\t<input type=\"button\" class=\"button2\" accesskey=\"h\" name=\"addbbcode24\" value=\"Spoiler\" style=\"width: 60px\" onclick=\"bbstyle(24, event)\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("BBCODE_SPOILER_HELP_CTRL");
            echo "\" />
\t";
        }
        // line 30
        echo "\t<input type=\"button\" class=\"button2\" accesskey=\"c\" name=\"addbbcode8\" value=\"Code\" style=\"width: 40px\" onclick=\"bbstyle(8)\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("BBCODE_C_HELP");
        echo "\" />
\t<input type=\"button\" class=\"button2\" accesskey=\"l\" name=\"addbbcode10\" value=\"List\" style=\"width: 40px\" onclick=\"bbstyle(10, event)\" title=\"";
        // line 31
        echo $this->env->getExtension('phpbb')->lang("BBCODE_L_HELP");
        echo "\" />
\t<input type=\"button\" class=\"button2\" accesskey=\"y\" name=\"addlistitem\" value=\"[*]\" style=\"width: 40px\" onclick=\"bbstyle(-1)\" title=\"";
        // line 32
        echo $this->env->getExtension('phpbb')->lang("BBCODE_LISTITEM_HELP");
        echo "\" />
\t";
        // line 33
        if ((isset($context["S_BBCODE_IMG"]) ? $context["S_BBCODE_IMG"] : null)) {
            // line 34
            echo "\t\t<input type=\"button\" class=\"button2\" accesskey=\"p\" name=\"addbbcode14\" value=\"Img\" style=\"width: 40px\" onclick=\"bbstyle(14)\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("BBCODE_P_HELP");
            echo "\" />
\t";
        }
        // line 36
        echo "\t";
        if ((isset($context["S_LINKS_ALLOWED"]) ? $context["S_LINKS_ALLOWED"] : null)) {
            // line 37
            echo "\t\t<input type=\"button\" class=\"button2\" accesskey=\"w\" name=\"addbbcode16\" value=\"URL\" style=\"text-decoration: underline; width: 40px\" onclick=\"bbstyle(16)\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("BBCODE_W_HELP");
            echo "\" />
\t";
        }
        // line 39
        echo "\t";
        if ((isset($context["S_BBCODE_FLASH"]) ? $context["S_BBCODE_FLASH"] : null)) {
            // line 40
            echo "\t\t<input type=\"button\" class=\"button2\" accesskey=\"d\" name=\"addbbcode18\" value=\"Flash\" onclick=\"bbstyle(18)\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("BBCODE_D_HELP");
            echo "\" />
\t";
        }
        // line 42
        echo "\t";
        if ((((isset($context["MIN_FONT_SIZE"]) ? $context["MIN_FONT_SIZE"] : null) != 100) || ((isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) != 100))) {
            // line 43
            echo "\t<select name=\"addbbcode20\" onchange=\"bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]');this.form.addbbcode20.selectedIndex = 2;\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("BBCODE_F_HELP");
            echo "\">
\t\t";
            // line 44
            if (( !(isset($context["MIN_FONT_SIZE"]) ? $context["MIN_FONT_SIZE"] : null) || ((isset($context["MIN_FONT_SIZE"]) ? $context["MIN_FONT_SIZE"] : null) <= 50))) {
                echo "<option value=\"50\">";
                echo $this->env->getExtension('phpbb')->lang("FONT_TINY");
                echo "</option>";
            }
            // line 45
            echo "\t\t";
            if (( !(isset($context["MIN_FONT_SIZE"]) ? $context["MIN_FONT_SIZE"] : null) || ((isset($context["MIN_FONT_SIZE"]) ? $context["MIN_FONT_SIZE"] : null) <= 85))) {
                echo "<option value=\"85\">";
                echo $this->env->getExtension('phpbb')->lang("FONT_SMALL");
                echo "</option>";
            }
            // line 46
            echo "\t\t<option value=\"100\" selected=\"selected\">";
            echo $this->env->getExtension('phpbb')->lang("FONT_NORMAL");
            echo "</option>
\t\t";
            // line 47
            if (( !(isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) || ((isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) >= 150))) {
                echo "<option value=\"150\">";
                echo $this->env->getExtension('phpbb')->lang("FONT_LARGE");
                echo "</option>";
            }
            // line 48
            echo "\t\t";
            if (( !(isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) || ((isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) >= 200))) {
                echo "<option value=\"200\">";
                echo $this->env->getExtension('phpbb')->lang("FONT_HUGE");
                echo "</option>";
            }
            // line 49
            echo "\t</select>
\t";
        }
        // line 51
        echo "\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            // line 52
            echo "\t<input type=\"button\" class=\"button2\" name=\"addbbcode";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
            echo "\" value=\"";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_TAG", array());
            echo "\" onclick=\"bbstyle(";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
            echo ")\" title=\"";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_HELPLINE", array());
            echo "\" />
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "</div>
";
        // line 55
    }

    public function getTemplateName()
    {
        return "acp_posting_buttons.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 55,  222 => 54,  207 => 52,  202 => 51,  198 => 49,  191 => 48,  185 => 47,  180 => 46,  173 => 45,  167 => 44,  162 => 43,  159 => 42,  153 => 40,  150 => 39,  144 => 37,  141 => 36,  135 => 34,  133 => 33,  129 => 32,  125 => 31,  120 => 30,  114 => 28,  111 => 27,  105 => 25,  103 => 24,  99 => 23,  95 => 22,  90 => 20,  86 => 19,  82 => 18,  79 => 17,  78 => 16,  75 => 15,  60 => 14,  46 => 11,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
