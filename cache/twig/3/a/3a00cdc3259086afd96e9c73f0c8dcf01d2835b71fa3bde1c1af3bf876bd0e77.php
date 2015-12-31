<?php

/* overall_footer.html */
class __TwigTemplate_3a00cdc3259086afd96e9c73f0c8dcf01d2835b71fa3bde1c1af3bf876bd0e77 extends Twig_Template
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
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- /#main -->
\t\t\t\t</div>
\t\t</div><!-- /#acp -->
\t</div>

\t<div id=\"page-footer\">
\t\t<div class=\"copyright\">
\t\t\t";
        // line 9
        if ((isset($context["CREDIT_LINE"]) ? $context["CREDIT_LINE"] : null)) {
            // line 10
            echo "\t\t\t\t";
            echo (isset($context["CREDIT_LINE"]) ? $context["CREDIT_LINE"] : null);
            echo "
\t\t\t";
        }
        // line 12
        echo "
\t\t\t";
        // line 13
        if ((isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null)) {
            // line 14
            echo "\t\t\t\t";
            if ((isset($context["CREDIT_LINE"]) ? $context["CREDIT_LINE"] : null)) {
                echo "<br />";
            }
            // line 15
            echo "\t\t\t\t";
            echo (isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null);
            echo "
\t\t\t";
        }
        // line 17
        echo "\t\t</div>

\t\t<div id=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 19
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
\t\t\t<div id=\"darken\">&nbsp;</div>
\t\t</div>
\t\t<div id=\"loading_indicator\"></div>

\t\t<div id=\"phpbb_alert\" class=\"phpbb_alert\" data-l-err=\"";
        // line 24
        echo $this->env->getExtension('phpbb')->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->env->getExtension('phpbb')->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t\t<a href=\"#\" class=\"alert_close\"></a>
\t\t\t<h3 class=\"alert_title\"></h3><p class=\"alert_text\"></p>
\t\t</div>
\t\t<div id=\"phpbb_confirm\" class=\"phpbb_alert\">
\t\t\t<a href=\"#\" class=\"alert_close\"></a>
\t\t\t<div class=\"alert_text\"></div>
\t\t</div>
\t</div>
</div>

<!--[if lt IE 9]>
\t<script src=\"";
        // line 36
        echo (isset($context["T_JQUERY_LINK"]) ? $context["T_JQUERY_LINK"] : null);
        echo "\"></script>
\t";
        // line 37
        if ((isset($context["S_ALLOW_CDN"]) ? $context["S_ALLOW_CDN"] : null)) {
            echo "<script>window.jQuery || document.write('<script src=\"";
            echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
            echo "/javascript/jquery.min.js?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\"><\\/script>')</script>";
        }
        // line 38
        echo "<![endif]-->
<!--[if gte IE 9]><!-->
\t<script src=\"";
        // line 40
        echo (isset($context["T_JQUERY_V2_LINK"]) ? $context["T_JQUERY_V2_LINK"] : null);
        echo "\"></script>
\t";
        // line 41
        if ((isset($context["S_ALLOW_CDN"]) ? $context["S_ALLOW_CDN"] : null)) {
            echo "<script>window.jQuery || document.write('<script src=\"";
            echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
            echo "/javascript/jquery.v2.js?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\"><\\/script>')</script>";
        }
        // line 42
        echo "<!--<![endif]-->
<script src=\"";
        // line 43
        echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
        echo "/javascript/core.js?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\"></script>
";
        // line 44
        $asset_file = "ajax.js";
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
        // line 45
        $asset_file = "admin.js";
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
        // line 46
        echo "
<script>
jQuery(function(\$)
{
\t// Preload sending animation for silly IE and Chrome
\tvar \$preloader = \$('<button class=\"sending\" style=\"position: absolute; top: -99px; left: -99px;\"></button>').appendTo(document.body);
\tsetTimeout(function(){\$preloader.remove();}, 10);

\t// Forms submitting indication
\t\$('form input[type=submit]').on('click', function()
\t{
\t\tvar \$submit = \$(this);
\t\tif (\$submit.hasClass('sending')) return false;
\t\t\$(this).parents('form').off('submit.sending').one('submit.sending', function(e)
\t\t{
\t\t\tif (e.isDefaultPrevented()) return;
\t\t\t\$submit.addClass('sending');
\t\t\tvar last = (new Date()).getTime();
\t\t\tvar timer = setInterval(function()
\t\t\t{
\t\t\t\tif ((new Date()).getTime() - last > 2000)
\t\t\t\t{
\t\t\t\t\t\$submit.removeClass('sending');
\t\t\t\t\tclearInterval(timer);
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\tlast = (new Date()).getTime();
\t\t\t}, 1000);
\t\t});
\t});

\t// Ctrl+Enter and Alt+Enter titles for default and alternate submit buttons
\t\$('form input[type=submit].default-submit-action').attr('title', 'Ctrl+Enter');
\t\$('form input[type=submit].alternate-submit-action').attr('title', 'Alt+Enter');

\t// Enter, Ctrl+Enter and Alt+Enter handler
\t\$('form input[type=text], form input[type=password], form textarea').on('keydown', function (e)
\t{
\t\tvar is_input = !\$(this).is('textarea');

\t\t// Detect enter in autocomplete
\t\tif (is_input)
\t\t{
\t\t\tvar in_autocomplete = \$(this).data('in_autocomplete');
\t\t\t\$(this).data('in_autocomplete', (e.which == 40 /*down*/ || e.which == 38 /*up*/ || e.which == 34 /*pgdn*/ || e.which == 33 /*pgup*/));
\t\t\tif (in_autocomplete && (e.which == 13 || e.which == 10)) return true;
\t\t}

\t\tif ((e.which == 13 || e.which == 10) && (is_input || e.ctrlKey || e.altKey))
\t\t{
\t\t\t// Find proper submit button
\t\t\tvar \$form = \$(this).parents('form');
\t\t\tvar \$submit = \$form.find('input[type=submit].' + (e.altKey ? 'alternate' : 'default') + '-submit-action:eq(0)');
\t\t\tif (\$submit.length == 0)
\t\t\t{
\t\t\t\tif (e.altKey) return false;
\t\t\t\t\$submit = \$form.find('input[type=submit]');
\t\t\t\tif (\$submit.length == 0) return false;
\t\t\t\tif (\$submit.length > 1)
\t\t\t\t{
\t\t\t\t\t\$submit = \$form.find('input[type=submit][name=submit]');
\t\t\t\t\tif (\$submit.length != 1) return false;
\t\t\t\t}
\t\t\t}

\t\t\t// Submit form
\t\t\tif (window.opera && e.ctrlKey)
\t\t\t{
\t\t\t\t// Prevent creation of new tab in Opera
\t\t\t\t// Unfortunately this method does not work with the button with name=\"submit\"
\t\t\t\tif (\$submit.attr('name') == 'submit') return false;
\t\t\t\t\$submit.triggerHandler('click');
\t\t\t\tif (\$submit.attr('name'))
\t\t\t\t{
\t\t\t\t\tvar \$input = \$('<input type=\"hidden\" />').attr('name', \$submit.attr('name')).val(\$submit.val());
\t\t\t\t\t\$form.append(\$input).submit();
\t\t\t\t\t\$input.remove();
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\t\$form.submit();
\t\t\t\t}
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\t\$submit.click();
\t\t\t}
\t\t\treturn false;
\t\t}

\t\treturn true;
\t});
});

";
        // line 140
        if (((isset($context["S_OVERVIEW"]) ? $context["S_OVERVIEW"] : null) && ( !(isset($context["S_USER_FOUNDER"]) ? $context["S_USER_FOUNDER"] : null) || (isset($context["S_FOUNDER"]) ? $context["S_FOUNDER"] : null)))) {
            // line 141
            echo "jQuery(function(\$)
{
\t\$('#quicktools').on('change', function()
\t{
\t\tvar option = \$(this).val();
\t\t\$('#reasons').hide();
\t\t\$('#delrates').hide();

\t\tswitch (option)
\t\t{
\t\t\tcase 'banuser':
\t\t\tcase 'banemail':
\t\t\tcase 'banip':
\t\t\t\t\$('#reasons').show();
\t\t\tbreak;

\t\t\tcase 'delrates':
\t\t\t\t\$('#delrates').show();
\t\t\tbreak;
\t\t}

\t\tvar text = \$('#ban_reason').val();
\t\tif (text && text != '";
            // line 163
            echo addslashes($this->env->getExtension('phpbb')->lang("USER_ADMIN_BAN_NAME_REASON"));
            echo "' && text != '";
            echo addslashes($this->env->getExtension('phpbb')->lang("USER_ADMIN_BAN_EMAIL_REASON"));
            echo "' && text != '";
            echo addslashes($this->env->getExtension('phpbb')->lang("USER_ADMIN_BAN_IP_REASON"));
            echo "')
\t\t{
\t\t\treturn;
\t\t}

\t\tif (option == 'banuser')
\t\t{
\t\t\t\$('#ban_reason').val('";
            // line 170
            echo addslashes($this->env->getExtension('phpbb')->lang("USER_ADMIN_BAN_NAME_REASON"));
            echo "');
\t\t}
\t\telse if (option == 'banemail')
\t\t{
\t\t\t\$('#ban_reason').val('";
            // line 174
            echo addslashes($this->env->getExtension('phpbb')->lang("USER_ADMIN_BAN_EMAIL_REASON"));
            echo "');
\t\t}
\t\telse if (option == 'banip')
\t\t{
\t\t\t\$('#ban_reason').val('";
            // line 178
            echo addslashes($this->env->getExtension('phpbb')->lang("USER_ADMIN_BAN_IP_REASON"));
            echo "');
\t\t}
\t});
\t\$('#quicktools').trigger('change');
});
";
        }
        // line 184
        echo "</script>

";
        // line 186
        // line 187
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SCRIPTS", array());
        echo "

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 187,  320 => 186,  316 => 184,  307 => 178,  300 => 174,  293 => 170,  279 => 163,  255 => 141,  253 => 140,  157 => 46,  142 => 45,  127 => 44,  121 => 43,  118 => 42,  110 => 41,  106 => 40,  102 => 38,  94 => 37,  90 => 36,  73 => 24,  57 => 19,  53 => 17,  47 => 15,  42 => 14,  40 => 13,  37 => 12,  31 => 10,  29 => 9,  19 => 1,);
    }
}
