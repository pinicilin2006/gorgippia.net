<?php

/* acp_top_links.html */
class __TwigTemplate_cd24af4e75cd083042d7a3a5a990dbfcc9ac1abf286ac2913059b7b89328010e extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "acp_top_links.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<a name=\"maincontent\"></a>

";
        // line 4
        if ((isset($context["S_EDIT_LINK"]) ? $context["S_EDIT_LINK"] : null)) {
            // line 5
            echo "\t<a href=\"";
            echo (isset($context["U_BACK"]) ? $context["U_BACK"] : null);
            echo "\" style=\"float: ";
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a>
\t<h1>";
            // line 6
            echo $this->env->getExtension('phpbb')->lang("ACP_TOP_LINKS");
            echo "</h1>
\t<p>";
            // line 7
            echo $this->env->getExtension('phpbb')->lang("ACP_TOP_LINKS_EXPLAIN");
            echo "</p>
\t<form id=\"acp_top_links\" method=\"post\" action=\"";
            // line 8
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">
\t<fieldset>
\t\t<legend>";
            // line 10
            echo $this->env->getExtension('phpbb')->lang("EDIT_LINK");
            echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"title\">";
            // line 12
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo "</label></dt>
\t\t\t<dd><input id=\"title\" type=\"text\" name=\"title\" value=\"";
            // line 13
            echo (isset($context["LINK_TITLE"]) ? $context["LINK_TITLE"] : null);
            echo "\" maxlength=\"255\" size=\"40\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"url\">";
            // line 16
            echo $this->env->getExtension('phpbb')->lang("LINK");
            echo "</label></dt>
\t\t\t<dd><input id=\"url\" type=\"text\" name=\"url\" value=\"";
            // line 17
            echo (isset($context["LINK_URL"]) ? $context["LINK_URL"] : null);
            echo "\" maxlength=\"255\" size=\"40\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"newwindow\">";
            // line 20
            echo $this->env->getExtension('phpbb')->lang("LINK_NEWWINDOW");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("LINK_NEWWINDOW_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"newwindow\" value=\"1\"";
            // line 21
            if ((isset($context["LINK_NEWWINDOW"]) ? $context["LINK_NEWWINDOW"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"newwindow\" value=\"0\"";
            // line 22
            if ( !(isset($context["LINK_NEWWINDOW"]) ? $context["LINK_NEWWINDOW"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " id=\"newwindow\" /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"nofollow\">";
            // line 25
            echo $this->env->getExtension('phpbb')->lang("LINK_NOFOLLOW");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("LINK_NOFOLLOW_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"nofollow\" value=\"1\"";
            // line 26
            if ((isset($context["LINK_NOFOLLOW"]) ? $context["LINK_NOFOLLOW"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"nofollow\" value=\"0\"";
            // line 27
            if ( !(isset($context["LINK_NOFOLLOW"]) ? $context["LINK_NOFOLLOW"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " id=\"nofollow\" /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t";
            // line 29
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
\t\t<p class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"save\" value=\"";
            // line 31
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 32
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" />
\t\t\t";
            // line 33
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t</p>
\t</fieldset>
\t</form>
";
        } else {
            // line 38
            echo "\t<h1>";
            echo $this->env->getExtension('phpbb')->lang("ACP_TOP_LINKS");
            echo "</h1>
\t<p>";
            // line 39
            echo $this->env->getExtension('phpbb')->lang("ACP_TOP_LINKS_EXPLAIN");
            echo "</p>
\t<form id=\"acp_top_links\" method=\"post\" action=\"";
            // line 40
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t<fieldset class=\"tabulated\">
\t<legend>";
            // line 43
            echo $this->env->getExtension('phpbb')->lang("ACP_TOP_LINKS");
            echo "</legend>
\t<p class=\"quick\">";
            // line 44
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "<input class=\"button2\" name=\"add\" type=\"submit\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("ADD_LINK");
            echo "\" /></p>
\t<table cellspacing=\"1\">
\t<thead>
\t<tr>
\t\t<th>";
            // line 48
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo "</th>
\t\t<th>";
            // line 49
            echo $this->env->getExtension('phpbb')->lang("LINK");
            echo "</th>
\t\t<th style=\"width: 7%;\">";
            // line 50
            echo $this->env->getExtension('phpbb')->lang("LINK_NEWWINDOW");
            echo "</th>
\t\t<th style=\"width: 7%;\">";
            // line 51
            echo $this->env->getExtension('phpbb')->lang("LINK_NOFOLLOW");
            echo "</th>
\t\t<th style=\"width: 1%;\">";
            // line 52
            echo $this->env->getExtension('phpbb')->lang("OPTIONS");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 56
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "items", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
                // line 57
                echo "\t\t";
                if (($this->getAttribute($context["items"], "S_ROW_COUNT", array()) % 2 == 0)) {
                    echo "<tr class=\"row1\">";
                } else {
                    echo "<tr class=\"row2\">";
                }
                // line 58
                echo "\t\t<td style=\"text-align: center;\">";
                echo $this->getAttribute($context["items"], "TITLE", array());
                echo "</td>
\t\t<td style=\"text-align: center;\">";
                // line 59
                echo $this->getAttribute($context["items"], "URL", array());
                echo "</td>
\t\t<td style=\"text-align: center;\">";
                // line 60
                if ($this->getAttribute($context["items"], "NEWWINDOW", array())) {
                    echo $this->env->getExtension('phpbb')->lang("YES");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("NO");
                }
                echo "</td>
\t\t<td style=\"text-align: center;\">";
                // line 61
                if ($this->getAttribute($context["items"], "NOFOLLOW", array())) {
                    echo $this->env->getExtension('phpbb')->lang("YES");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("NO");
                }
                echo "</td>
\t\t<td style=\"text-align: right; white-space: nowrap;\">
\t\t\t";
                // line 63
                if ($this->getAttribute($context["items"], "S_FIRST_ROW", array())) {
                    echo (isset($context["ICON_MOVE_UP_DISABLED"]) ? $context["ICON_MOVE_UP_DISABLED"] : null);
                } else {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["items"], "U_MOVE_UP", array());
                    echo "\">";
                    echo (isset($context["ICON_MOVE_UP"]) ? $context["ICON_MOVE_UP"] : null);
                    echo "</a>";
                }
                echo "&nbsp;
\t\t\t";
                // line 64
                if ($this->getAttribute($context["items"], "S_LAST_ROW", array())) {
                    echo (isset($context["ICON_MOVE_DOWN_DISABLED"]) ? $context["ICON_MOVE_DOWN_DISABLED"] : null);
                } else {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["items"], "U_MOVE_DOWN", array());
                    echo "\">";
                    echo (isset($context["ICON_MOVE_DOWN"]) ? $context["ICON_MOVE_DOWN"] : null);
                    echo "</a>";
                }
                // line 65
                echo "\t\t\t&nbsp;<a href=\"";
                echo $this->getAttribute($context["items"], "U_EDIT", array());
                echo "\">";
                echo (isset($context["ICON_EDIT"]) ? $context["ICON_EDIT"] : null);
                echo "</a>&nbsp; <a href=\"";
                echo $this->getAttribute($context["items"], "U_DELETE", array());
                echo "\">";
                echo (isset($context["ICON_DELETE"]) ? $context["ICON_DELETE"] : null);
                echo "</a>
\t\t</td>
\t</tr>
\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 69
                echo "\t<tr class=\"row3\">
\t\t<td colspan=\"5\">";
                // line 70
                echo $this->env->getExtension('phpbb')->lang("ACP_NO_ITEMS");
                echo "</td>
\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "\t</tbody>
\t</table>
\t";
            // line 75
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>
";
        }
        // line 79
        echo "
";
        // line 80
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_top_links.html", 80)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_top_links.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 80,  302 => 79,  295 => 75,  291 => 73,  282 => 70,  279 => 69,  263 => 65,  253 => 64,  241 => 63,  232 => 61,  224 => 60,  220 => 59,  215 => 58,  208 => 57,  203 => 56,  196 => 52,  192 => 51,  188 => 50,  184 => 49,  180 => 48,  171 => 44,  167 => 43,  161 => 40,  157 => 39,  152 => 38,  144 => 33,  140 => 32,  136 => 31,  131 => 29,  122 => 27,  114 => 26,  108 => 25,  98 => 22,  90 => 21,  84 => 20,  78 => 17,  74 => 16,  68 => 13,  64 => 12,  59 => 10,  54 => 8,  50 => 7,  46 => 6,  37 => 5,  35 => 4,  31 => 2,  19 => 1,);
    }
}
