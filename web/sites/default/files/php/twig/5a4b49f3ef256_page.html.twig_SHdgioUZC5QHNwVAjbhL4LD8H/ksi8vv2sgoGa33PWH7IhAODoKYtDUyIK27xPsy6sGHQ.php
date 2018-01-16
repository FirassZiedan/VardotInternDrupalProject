<?php

/* themes/custom/mouse/templates/system/page.html.twig */
class __TwigTemplate_13029134a8ff01b7c7a854c2ab1832c878548f8b377e54735f11aed153dae2db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'rigth' => array($this, 'block_rigth'),
            'left' => array($this, 'block_left'),
            'navbar' => array($this, 'block_navbar'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'highlighted' => array($this, 'block_highlighted'),
            'help' => array($this, 'block_help'),
            'slider' => array($this, 'block_slider'),
            'content' => array($this, 'block_content'),
            'feature' => array($this, 'block_feature'),
            'news' => array($this, 'block_news'),
            'content2' => array($this, 'block_content2'),
            'page_bottom' => array($this, 'block_page_bottom'),
            'footer_left' => array($this, 'block_footer_left'),
            'footer_right' => array($this, 'block_footer_right'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 52, "if" => 55, "block" => 59);
        $filters = array("clean_class" => 83, "t" => 96);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 52
        $context["container"] = (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 53
        echo "
";
        // line 55
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "rigth", array())) {
            // line 56
            echo "<div class =\"container\">
<div class =\"row\">
<div class=\"col-md-6 col-xs-12\">
  ";
            // line 59
            $this->displayBlock('rigth', $context, $blocks);
            // line 62
            echo "  </div>
";
        }
        // line 64
        echo "
";
        // line 66
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "left", array())) {
            // line 67
            echo "    <div class=\"icons-right col-md-6 col-xs-12\">
      ";
            // line 68
            $this->displayBlock('left', $context, $blocks);
            // line 71
            echo "      </div>
    </div>
  </div>
";
        }
        // line 75
        echo "
";
        // line 77
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()))) {
            // line 78
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 117
        echo "
";
        // line 119
        $this->displayBlock('main', $context, $blocks);
        // line 186
        echo "


";
        // line 189
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_bottom", array())) {
            // line 190
            echo "  ";
            $this->displayBlock('page_bottom', $context, $blocks);
        }
        // line 196
        echo "
<div class =\"full-footer col-xs-12\">
";
        // line 198
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_left", array())) {
            // line 199
            echo "  ";
            $this->displayBlock('footer_left', $context, $blocks);
        }
        // line 205
        echo "
";
        // line 206
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_right", array())) {
            // line 207
            echo "  ";
            $this->displayBlock('footer_right', $context, $blocks);
        }
        // line 213
        echo "
</div>
";
    }

    // line 59
    public function block_rigth($context, array $blocks = array())
    {
        // line 60
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "rigth", array()), "html", null, true));
        echo "
  ";
    }

    // line 68
    public function block_left($context, array $blocks = array())
    {
        // line 69
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "left", array()), "html", null, true));
        echo "
      ";
    }

    // line 78
    public function block_navbar($context, array $blocks = array())
    {
        // line 79
        echo "    ";
        // line 80
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 82
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 83
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())))) : ((isset($context["container"]) ? $context["container"] : null))));
        // line 86
        echo "    <div class=\"header-wrapper\">
    <header";
        // line 87
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "addClass", array(0 => (isset($context["navbar_classes"]) ? $context["navbar_classes"] : null)), "method"), "removeClass", array(0 => (isset($context["container"]) ? $context["container"] : null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 88
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => (isset($context["container"]) ? $context["container"] : null)), "method")) {
            // line 89
            echo "        <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
            echo "\">
      ";
        }
        // line 91
        echo "      <div class=\"navbar-header\">
        ";
        // line 92
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 94
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 95
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 96
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 102
        echo "      </div>

      ";
        // line 105
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 106
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 107
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 110
        echo "      ";
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => (isset($context["container"]) ? $context["container"] : null)), "method")) {
            // line 111
            echo "        </div>
      ";
        }
        // line 113
        echo "    </header>
    </div>
  ";
    }

    // line 119
    public function block_main($context, array $blocks = array())
    {
        // line 120
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 124
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 125
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 130
            echo "      ";
        }
        // line 131
        echo "
      ";
        // line 133
        echo "      <section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">

        ";
        // line 136
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 137
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 140
            echo "        ";
        }
        // line 141
        echo "
        ";
        // line 143
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 144
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 147
            echo "        ";
        }
        // line 148
        echo "

        ";
        // line 151
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slider", array())) {
            // line 152
            echo "        ";
            $this->displayBlock('slider', $context, $blocks);
            // line 157
            echo "        ";
        }
        // line 158
        echo "
        ";
        // line 160
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 163
        echo "
        ";
        // line 165
        echo "        ";
        $this->displayBlock('feature', $context, $blocks);
        // line 169
        echo "
        ";
        // line 171
        echo "        ";
        $this->displayBlock('news', $context, $blocks);
        // line 175
        echo "
        ";
        // line 177
        echo "        ";
        $this->displayBlock('content2', $context, $blocks);
        // line 182
        echo "      </section>
    </div>
  </div>
";
    }

    // line 125
    public function block_header($context, array $blocks = array())
    {
        // line 126
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 127
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 137
    public function block_highlighted($context, array $blocks = array())
    {
        // line 138
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
    }

    // line 144
    public function block_help($context, array $blocks = array())
    {
        // line 145
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
          ";
    }

    // line 152
    public function block_slider($context, array $blocks = array())
    {
        // line 153
        echo "        <div class =\"slider-block\">
          ";
        // line 154
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slider", array()), "html", null, true));
        echo "
        </div>
        ";
    }

    // line 160
    public function block_content($context, array $blocks = array())
    {
        // line 161
        echo "          <div class=\"main-content\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "</div>
        ";
    }

    // line 165
    public function block_feature($context, array $blocks = array())
    {
        // line 166
        echo "          <div class =\"row\">
            <div class=\"col-sm-12 col-md-6\">";
        // line 167
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature", array()), "html", null, true));
        echo "</div>
        ";
    }

    // line 171
    public function block_news($context, array $blocks = array())
    {
        // line 172
        echo "            <div class=\"col-sm-12 col-md-6\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "news", array()), "html", null, true));
        echo "</div>
          </div>
        ";
    }

    // line 177
    public function block_content2($context, array $blocks = array())
    {
        // line 178
        echo "          <div class = \"row\">
            <div class=\"main-content\">";
        // line 179
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content2", array()), "html", null, true));
        echo "</div>
          </div>
        ";
    }

    // line 190
    public function block_page_bottom($context, array $blocks = array())
    {
        // line 191
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo "  col-xs-12\" role=\"contentinfo\">
      ";
        // line 192
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_bottom", array()), "html", null, true));
        echo "
    </footer>
  ";
    }

    // line 199
    public function block_footer_left($context, array $blocks = array())
    {
        // line 200
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo "  col-md-9 col-xs-12\" role=\"contentinfo\">
      ";
        // line 201
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_left", array()), "html", null, true));
        echo "
    </footer>
  ";
    }

    // line 207
    public function block_footer_right($context, array $blocks = array())
    {
        // line 208
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " col-md-3 col-xs-12 \" role=\"contentinfo\">
      ";
        // line 209
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_right", array()), "html", null, true));
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/mouse/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  460 => 209,  455 => 208,  452 => 207,  445 => 201,  440 => 200,  437 => 199,  430 => 192,  425 => 191,  422 => 190,  415 => 179,  412 => 178,  409 => 177,  401 => 172,  398 => 171,  392 => 167,  389 => 166,  386 => 165,  379 => 161,  376 => 160,  369 => 154,  366 => 153,  363 => 152,  356 => 145,  353 => 144,  346 => 138,  343 => 137,  336 => 127,  333 => 126,  330 => 125,  323 => 182,  320 => 177,  317 => 175,  314 => 171,  311 => 169,  308 => 165,  305 => 163,  302 => 160,  299 => 158,  296 => 157,  293 => 152,  290 => 151,  286 => 148,  283 => 147,  280 => 144,  277 => 143,  274 => 141,  271 => 140,  268 => 137,  265 => 136,  259 => 133,  256 => 131,  253 => 130,  250 => 125,  247 => 124,  240 => 120,  237 => 119,  231 => 113,  227 => 111,  224 => 110,  218 => 107,  215 => 106,  212 => 105,  208 => 102,  199 => 96,  196 => 95,  193 => 94,  189 => 92,  186 => 91,  180 => 89,  178 => 88,  174 => 87,  171 => 86,  169 => 83,  168 => 82,  167 => 80,  165 => 79,  162 => 78,  155 => 69,  152 => 68,  145 => 60,  142 => 59,  136 => 213,  132 => 207,  130 => 206,  127 => 205,  123 => 199,  121 => 198,  117 => 196,  113 => 190,  111 => 189,  106 => 186,  104 => 119,  101 => 117,  97 => 78,  95 => 77,  92 => 75,  86 => 71,  84 => 68,  81 => 67,  79 => 66,  76 => 64,  72 => 62,  70 => 59,  65 => 56,  63 => 55,  60 => 53,  58 => 52,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title: The page title, for use in the actual content.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - messages: Status and error messages. Should be displayed prominently.
 * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the navigation region.
 * - page.navigation_collapsible: Items for the navigation (collapsible) region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.footer: Items for the footer region.
 *
 * @ingroup templates
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
{% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}

{# top_right #}
{% if page.rigth %}
<div class =\"container\">
<div class =\"row\">
<div class=\"col-md-6 col-xs-12\">
  {% block rigth %}
    {{ page.rigth }}
  {% endblock %}
  </div>
{% endif %}

{# top_left #}
{% if page.left %}
    <div class=\"icons-right col-md-6 col-xs-12\">
      {% block left %}
        {{ page.left }}
      {% endblock %}
      </div>
    </div>
  </div>
{% endif %}

{# Navbar #}
{% if page.navigation or page.navigation_collapsible %}
  {% block navbar %}
    {%
      set navbar_classes = [
        'navbar',
        theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',
        theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container,
      ]
    %}
    <div class=\"header-wrapper\">
    <header{{ navbar_attributes.addClass(navbar_classes).removeClass(container) }} id=\"navbar\" role=\"banner\">
      {% if not navbar_attributes.hasClass(container) %}
        <div class=\"{{ container }}\">
      {% endif %}
      <div class=\"navbar-header\">
        {{ page.navigation }}
        {# .btn-navbar is used as the toggle for collapsed navbar content #}
        {% if page.navigation_collapsible %}
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">{{ 'Toggle navigation'|t }}</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        {% endif %}
      </div>

      {# Navigation (collapsible) #}
      {% if page.navigation_collapsible %}
        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          {{ page.navigation_collapsible }}
        </div>
      {% endif %}
      {% if not navbar_attributes.hasClass(container) %}
        </div>
      {% endif %}
    </header>
    </div>
  {% endblock %}
{% endif %}

{# Main #}
{% block main %}
  <div role=\"main\" class=\"main-container {{ container }} js-quickedit-main-content\">
    <div class=\"row\">

      {# Header #}
      {% if page.header %}
        {% block header %}
          <div class=\"col-sm-12\" role=\"heading\">
            {{ page.header }}
          </div>
        {% endblock %}
      {% endif %}

      {# Content #}
      <section{{ content_attributes.addClass(content_classes) }}>

        {# Highlighted #}
        {% if page.highlighted %}
          {% block highlighted %}
            <div class=\"highlighted\">{{ page.highlighted }}</div>
          {% endblock %}
        {% endif %}

        {# Help #}
        {% if page.help %}
          {% block help %}
            {{ page.help }}
          {% endblock %}
        {% endif %}


        {# Slider #}
        {% if page.slider %}
        {% block slider %}
        <div class =\"slider-block\">
          {{ page.slider }}
        </div>
        {% endblock %}
        {% endif %}

        {# Content #}
        {% block content %}
          <div class=\"main-content\">{{ page.content }}</div>
        {% endblock %}

        {# feature #}
        {% block feature %}
          <div class =\"row\">
            <div class=\"col-sm-12 col-md-6\">{{ page.feature }}</div>
        {% endblock %}

        {# news #}
        {% block news %}
            <div class=\"col-sm-12 col-md-6\">{{ page.news }}</div>
          </div>
        {% endblock %}

        {# content2 #}
        {% block content2 %}
          <div class = \"row\">
            <div class=\"main-content\">{{ page.content2 }}</div>
          </div>
        {% endblock %}
      </section>
    </div>
  </div>
{% endblock %}



{% if page.page_bottom %}
  {% block page_bottom %}
    <footer class=\"footer {{ container }}  col-xs-12\" role=\"contentinfo\">
      {{ page.page_bottom }}
    </footer>
  {% endblock %}
{% endif %}

<div class =\"full-footer col-xs-12\">
{% if page.footer_left %}
  {% block footer_left %}
    <footer class=\"footer {{ container }}  col-md-9 col-xs-12\" role=\"contentinfo\">
      {{ page.footer_left }}
    </footer>
  {% endblock %}
{% endif %}

{% if page.footer_right %}
  {% block footer_right %}
    <footer class=\"footer {{ container }} col-md-3 col-xs-12 \" role=\"contentinfo\">
      {{ page.footer_right }}
    </footer>
  {% endblock %}
{% endif %}

</div>
", "themes/custom/mouse/templates/system/page.html.twig", "/var/www/html/drupal/web/themes/custom/mouse/templates/system/page.html.twig");
    }
}
