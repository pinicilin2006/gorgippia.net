<?php

/* viewonline_body.html */
class __TwigTemplate_2d54ad46b6b1534046874fed762e330c5674a9034c7c169d8b26d2e4b8d7df18 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "viewonline_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2 class=\"viewonline-title\">";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
        echo "</h2>
<p>";
        // line 4
        echo (isset($context["TOTAL_REGISTERED_USERS_ONLINE"]) ? $context["TOTAL_REGISTERED_USERS_ONLINE"] : null);
        echo " &bull; ";
        echo (isset($context["TOTAL_GUEST_USERS_ONLINE"]) ? $context["TOTAL_GUEST_USERS_ONLINE"] : null);
        if ((isset($context["S_SWITCH_GUEST_DISPLAY"]) ? $context["S_SWITCH_GUEST_DISPLAY"] : null)) {
            echo " [<a href=\"";
            echo (isset($context["U_SWITCH_GUEST_DISPLAY"]) ? $context["U_SWITCH_GUEST_DISPLAY"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SWITCH_GUEST_DISPLAY");
            echo "</a>]";
        }
        echo " &bull; ";
        echo (isset($context["TOTAL_BOT_USERS_ONLINE"]) ? $context["TOTAL_BOT_USERS_ONLINE"] : null);
        if ((isset($context["S_SWITCH_BOTS_DISPLAY"]) ? $context["S_SWITCH_BOTS_DISPLAY"] : null)) {
            echo " [<a href=\"";
            echo (isset($context["U_SWITCH_BOTS_DISPLAY"]) ? $context["U_SWITCH_BOTS_DISPLAY"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SWITCH_BOTS_DISPLAY");
            echo "</a>]";
        }
        echo "</p>

<div class=\"action-bar top\">
\t<div class=\"pagination\">
\t\t";
        // line 8
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
            echo " 
\t\t\t";
            // line 9
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "viewonline_body.html", 9)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 10
            echo "\t\t";
        }
        // line 11
        echo "\t</div>
</div>

<div class=\"forumbg forumbg-table\">
\t<div class=\"inner\">

\t<table class=\"table1\">

\t";
        // line 19
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "user_row", array()))) {
            // line 20
            echo "\t\t<thead>
\t\t<tr>
\t\t\t<th class=\"name\"><a href=\"";
            // line 22
            echo (isset($context["U_SORT_USERNAME"]) ? $context["U_SORT_USERNAME"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo "</a></th>
\t\t\t<th class=\"info\"><a href=\"";
            // line 23
            echo (isset($context["U_SORT_LOCATION"]) ? $context["U_SORT_LOCATION"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("FORUM_LOCATION");
            echo "</a></th>
\t\t\t<th class=\"active\"><a href=\"";
            // line 24
            echo (isset($context["U_SORT_UPDATED"]) ? $context["U_SORT_UPDATED"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("LAST_UPDATED");
            echo "</a></th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "user_row", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["user_row"]) {
                // line 29
                echo "\t\t<tr class=\"";
                if (($this->getAttribute($context["user_row"], "S_ROW_COUNT", array()) % 2 == 1)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                echo "\">
\t\t\t<td>";
                // line 30
                echo $this->getAttribute($context["user_row"], "USERNAME_FULL", array());
                if ($this->getAttribute($context["user_row"], "USER_IP", array())) {
                    echo " <span style=\"float: ";
                    echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
                    echo ";\">";
                    echo $this->env->getExtension('phpbb')->lang("IP");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["user_row"], "U_USER_IP", array());
                    echo "\">";
                    echo $this->getAttribute($context["user_row"], "USER_IP", array());
                    echo "</a> &#187; <a href=\"";
                    echo $this->getAttribute($context["user_row"], "U_WHOIS", array());
                    echo "\" onclick=\"popup(this.href, 750, 500); return false;\">";
                    echo $this->env->getExtension('phpbb')->lang("WHOIS");
                    echo "</a></span>";
                }
                // line 31
                echo "\t\t\t\t";
                if ($this->getAttribute($context["user_row"], "USER_BROWSER", array())) {
                    echo "<br />";
                    echo $this->getAttribute($context["user_row"], "USER_BROWSER", array());
                }
                echo "</td>
\t\t\t<td class=\"info\"><a href=\"";
                // line 32
                echo $this->getAttribute($context["user_row"], "U_FORUM_LOCATION", array());
                echo "\">";
                echo $this->getAttribute($context["user_row"], "FORUM_LOCATION", array());
                echo "</a></td>
\t\t\t<td class=\"active\">";
                // line 33
                echo $this->getAttribute($context["user_row"], "LASTUPDATE", array());
                echo "</td>
\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user_row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "\t";
        } else {
            // line 37
            echo "\t\t<tbody>
\t\t<tr class=\"bg1\">
\t\t\t<td colspan=\"3\">";
            // line 39
            echo $this->env->getExtension('phpbb')->lang("NO_ONLINE_USERS");
            if ((isset($context["S_SWITCH_GUEST_DISPLAY"]) ? $context["S_SWITCH_GUEST_DISPLAY"] : null)) {
                echo " &bull; <a href=\"";
                echo (isset($context["U_SWITCH_GUEST_DISPLAY"]) ? $context["U_SWITCH_GUEST_DISPLAY"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SWITCH_GUEST_DISPLAY");
                echo "</a>";
            }
            echo "</td>
\t\t</tr>
\t";
        }
        // line 42
        echo "\t</tbody>
\t</table>

\t</div>
</div>

";
        // line 48
        if ((isset($context["LEGEND"]) ? $context["LEGEND"] : null)) {
            echo "<p><em>";
            echo $this->env->getExtension('phpbb')->lang("LEGEND");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " ";
            echo (isset($context["LEGEND"]) ? $context["LEGEND"] : null);
            echo "</em></p>";
        }
        // line 49
        echo "
<div class=\"action-bar bottom\">
\t<div class=\"pagination\">
\t\t";
        // line 52
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
            echo " 
\t\t\t";
            // line 53
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "viewonline_body.html", 53)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 54
            echo "\t\t";
        }
        // line 55
        echo "\t</div>
</div>

";
        // line 58
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "viewonline_body.html", 58)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 59
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewonline_body.html", 59)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewonline_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 59,  239 => 58,  234 => 55,  231 => 54,  219 => 53,  215 => 52,  210 => 49,  201 => 48,  193 => 42,  180 => 39,  176 => 37,  173 => 36,  164 => 33,  158 => 32,  150 => 31,  132 => 30,  123 => 29,  119 => 28,  110 => 24,  104 => 23,  98 => 22,  94 => 20,  92 => 19,  82 => 11,  79 => 10,  67 => 9,  63 => 8,  38 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
