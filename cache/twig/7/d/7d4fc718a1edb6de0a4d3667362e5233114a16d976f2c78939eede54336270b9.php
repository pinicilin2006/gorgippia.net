<?php

/* overall_footer.html */
class __TwigTemplate_7d4fc718a1edb6de0a4d3667362e5233114a16d976f2c78939eede54336270b9 extends Twig_Template
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
        echo "\t\t";
        // line 2
        echo "\t</div>

";
        // line 4
        // line 5
        echo "
<div id=\"page-footer\" role=\"contentinfo\">
\t";
        // line 7
        $location = "navbar_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_footer.html", "overall_footer.html", 7)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 8
        echo "
\t";
        // line 9
        if ((isset($context["STYLE_COUNTERS_HTML"]) ? $context["STYLE_COUNTERS_HTML"] : null)) {
            // line 10
            echo "\t<div class=\"counters\">";
            echo (isset($context["STYLE_COUNTERS_HTML"]) ? $context["STYLE_COUNTERS_HTML"] : null);
            echo "</div>
\t";
        }
        // line 12
        echo "
\t<div class=\"copyright\">
\t\t";
        // line 14
        // line 15
        echo "\t\t";
        echo (isset($context["CREDIT_LINE"]) ? $context["CREDIT_LINE"] : null);
        echo "
\t\t";
        // line 16
        // line 17
        echo "\t\t";
        if ((isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null)) {
            echo "<br />";
            echo (isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null);
        }
        // line 18
        echo "\t\t";
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            echo (isset($context["RUN_CRON_TASK"]) ? $context["RUN_CRON_TASK"] : null);
        }
        // line 19
        echo "\t</div>

\t<div id=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 21
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
\t\t<div id=\"darken\">&nbsp;</div>
\t</div>

\t<div id=\"phpbb_alert\" class=\"phpbb_alert\" data-l-err=\"";
        // line 25
        echo $this->env->getExtension('phpbb')->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->env->getExtension('phpbb')->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t<a href=\"#\" class=\"alert_close\"></a>
\t\t<h3 class=\"alert_title\">&nbsp;</h3><p class=\"alert_text\"></p>
\t</div>
\t<div id=\"phpbb_confirm\" class=\"phpbb_alert\">
\t\t<a href=\"#\" class=\"alert_close\"></a>
\t\t<div class=\"alert_text\"></div>
\t</div>
</div>

</div>

<!--[if lt IE 9]>
\t<script src=\"";
        // line 38
        echo (isset($context["T_JQUERY_LINK"]) ? $context["T_JQUERY_LINK"] : null);
        echo "\"></script>
\t";
        // line 39
        if ((isset($context["S_ALLOW_CDN"]) ? $context["S_ALLOW_CDN"] : null)) {
            echo "<script>window.jQuery || document.write('<script src=\"";
            echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
            echo "/javascript/jquery.min.js?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\"><\\/script>')</script>";
        }
        // line 40
        echo "\t<script src=\"http://phpbbex.com/oldies/oldies.js\"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
\t<script src=\"";
        // line 43
        echo (isset($context["T_JQUERY_V2_LINK"]) ? $context["T_JQUERY_V2_LINK"] : null);
        echo "\"></script>
\t";
        // line 44
        if ((isset($context["S_ALLOW_CDN"]) ? $context["S_ALLOW_CDN"] : null)) {
            echo "<script>window.jQuery || document.write('<script src=\"";
            echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
            echo "/javascript/jquery.v2.js?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\"><\\/script>')</script>";
        }
        // line 45
        echo "<!--<![endif]-->

";
        // line 47
        if ((isset($context["MEJS"]) ? $context["MEJS"] : null)) {
            // line 48
            echo "\t<script src=\"";
            echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
            echo "assets/mejs/mediaelement.js?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\"></script>
";
        }
        // line 50
        echo "
<script src=\"";
        // line 51
        echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
        echo "/javascript/core.js?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\"></script>
";
        // line 52
        $asset_file = "forum_fn.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('6');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 53
        $asset_file = "ajax.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('6');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 54
        echo "
";
        // line 55
        // line 56
        echo "
";
        // line 57
        if ((isset($context["S_PLUPLOAD"]) ? $context["S_PLUPLOAD"] : null)) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 57)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 58
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SCRIPTS", array());
        echo "

<script>
";
        // line 61
        if (((isset($context["S_QUICK_REPLY"]) ? $context["S_QUICK_REPLY"] : null) && (isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null))) {
            // line 62
            echo "jQuery(function(\$)
{
\tvar waiting = false;
\t\$('#page-body').on('mouseup', 'div.postbody', function(event)
\t{
\t\twaiting = true;
\t\tvar post = this;
\t\tsetTimeout(function()
\t\t{
\t\t\twaiting = false;
\t\t\t\$('.no-full-quote').parent().hide();
\t\t\tif (get_selected_text() && event.which <= 1)
\t\t\t{
\t\t\t\t\$('.no-full-quote', post).parent().show();
\t\t\t}
\t\t}, 50);
\t});
\t\$('body').on('mouseup', function(event)
\t{
\t\tif (!waiting) \$('.no-full-quote').parent().hide();
\t});
});
";
        }
        // line 85
        echo "
";
        // line 86
        if ((isset($context["S_SHOW_POLL_BOX"]) ? $context["S_SHOW_POLL_BOX"] : null)) {
            // line 87
            echo "jQuery(function(\$) {
\t\$('#poll_title, #poll_option_text').on('blur', function() {
\t\tif (\$('#poll_title').val() == '' && \$('#poll_option_text').val() == '') \$('#poll_hidden').hide(); else \$('#poll_hidden').show();
\t});
\t\$('#poll_title').keyup(function() {
\t\tif (\$(this).val() != '') \$('#poll_hidden').show();
\t});
\t\$('#poll_title').blur();

\t\$('#poll_delete').change(function() {
\t\tif(\$(this).is(':checked')) {
\t\t\t\$('#poll_hidden').hide();
\t\t\t\$('#poll_title').parents('dl').hide();
\t\t} else {
\t\t\t\$('#poll_title').blur().parents('dl').show();
\t\t}
\t});
\t\$('#poll_delete').change();
});
";
        }
        // line 107
        echo "
";
        // line 108
        if ((isset($context["S_TYPE_TOGGLE"]) ? $context["S_TYPE_TOGGLE"] : null)) {
            // line 109
            echo "jQuery(function(\$)
{
\t\$(\"#postform input[name=topic_type]\").change(function()
\t{
\t\tif (\$(this).val() == 0) \$(\".only-for-announces\").hide(); else \$(\".only-for-announces\").show();
\t});
\t\$(\"#postform input[name=topic_type]:checked\").change();
});
";
        }
        // line 118
        echo "
";
        // line 119
        if (((isset($context["S_RATE_ENABLED"]) ? $context["S_RATE_ENABLED"] : null) && (isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null))) {
            // line 120
            echo "jQuery(function(\$)
{
\t\$('#page-body').on('click', '.rate-box .rate-minus, .rate-box .rate-plus', function()
\t{
\t\tvar url = 'app.php/phpbbex/rating/';
\t\tvar action = \$(this).hasClass('rate-minus') ? 'minus' : 'plus';
\t\tvar post_id = \$(this).parents('.post').attr('id').substr(1);
\t\tvar \$box = \$(this).parent();
\t\t\$('.rate-value', \$box).wrapInner('<i class=\"inline-preloader\"></i>');
\t\t\$.getJSON(url + action + '/' + post_id + '/' + '";
            // line 129
            echo (isset($context["AJAX_TOKEN"]) ? $context["AJAX_TOKEN"] : null);
            echo "')
\t\t.done(function(data)
\t\t{
\t\t\tif (data.status != 'ok') return;
\t\t\t";
            // line 133
            if ((isset($context["DISPLAY_RATERS"]) ? $context["DISPLAY_RATERS"] : null)) {
                // line 134
                echo "\t\t\tvar title = \$('.rate-value', \$box).attr('title');
\t\t\t";
            }
            // line 136
            echo "\t\t\tvar html = '';
\t\t\thtml += '<span class=\"button icon-button left-button rate-';
\t\t\thtml += (data.user_rate < 0) ? 'minus-voted' : (data.user_can_minus ? 'minus' : 'no-minus');
\t\t\thtml += '\"></span><span class=\"button icon-button center-button rate-value rate-';
\t\t\thtml += (data.post_rating > 0) ? 'positive' : ((data.post_rating < 0) ? 'negative' : 'zero');
\t\t\thtml += '\" title=\"+' + data.post_rating_positive + '/−' + data.post_rating_negative + '\">';
\t\t\thtml += (data.post_rating_positive != 0 || data.post_rating_negative != 0) ? data.post_rating : '−';
\t\t\thtml += '</span><span class=\"button icon-button right-button rate-';
\t\t\thtml += (data.user_rate > 0) ? 'plus-voted' : (data.user_can_plus ? 'plus' : 'no-plus');
\t\t\thtml += '\"></span>';
\t\t\t\$box.html(html);
\t\t\t";
            // line 147
            if ((isset($context["DISPLAY_RATERS"]) ? $context["DISPLAY_RATERS"] : null)) {
                // line 148
                echo "\t\t\t\$('.rate-value', \$box).attr('title', title ? title : '');
\t\t\t";
            }
            // line 150
            echo "\t\t})
\t\t.fail(function()
\t\t{
\t\t\t\$('.rate-value', \$box).text(\$('.rate-value span', \$box).text());
\t\t});
\t});
});
";
        }
        // line 158
        echo "
";
        // line 159
        if ((isset($context["MEJS"]) ? $context["MEJS"] : null)) {
            // line 160
            echo "(function(){
\tvar s = document.createElement('link');
\ts.setAttribute('rel', 'stylesheet');
\ts.setAttribute('href', '";
            // line 163
            echo (isset($context["T_ROOT_PATH"]) ? $context["T_ROOT_PATH"] : null);
            echo "/assets/mejs/mediaelement.css');
\tdocument.getElementsByTagName(\"head\")[0].appendChild(s);
})();
";
        }
        // line 167
        echo "</script>

";
        // line 169
        // line 170
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
        return array (  371 => 170,  370 => 169,  366 => 167,  359 => 163,  354 => 160,  352 => 159,  349 => 158,  339 => 150,  335 => 148,  333 => 147,  320 => 136,  316 => 134,  314 => 133,  307 => 129,  296 => 120,  294 => 119,  291 => 118,  280 => 109,  278 => 108,  275 => 107,  253 => 87,  251 => 86,  248 => 85,  223 => 62,  221 => 61,  215 => 58,  201 => 57,  198 => 56,  197 => 55,  194 => 54,  179 => 53,  164 => 52,  158 => 51,  155 => 50,  147 => 48,  145 => 47,  141 => 45,  133 => 44,  129 => 43,  124 => 40,  116 => 39,  112 => 38,  94 => 25,  79 => 21,  75 => 19,  70 => 18,  64 => 17,  63 => 16,  58 => 15,  57 => 14,  53 => 12,  47 => 10,  45 => 9,  42 => 8,  30 => 7,  26 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
