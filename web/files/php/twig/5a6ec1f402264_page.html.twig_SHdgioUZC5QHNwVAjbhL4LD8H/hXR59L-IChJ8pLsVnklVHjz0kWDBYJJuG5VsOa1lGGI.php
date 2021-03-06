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
            'copyright' => array($this, 'block_copyright'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 52, "block" => 59, "if" => 76);
        $filters = array("clean_class" => 82, "t" => 95);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'block', 'if'),
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
        echo "<div class =\"top-page-wrapper\">
<div class =\"container\">
<div class =\"row\">
<div class=\"col-md-6 col-xs-12\">
  ";
        // line 59
        $this->displayBlock('rigth', $context, $blocks);
        // line 62
        echo "  </div>


";
        // line 66
        echo "    <div class=\"icons-right col-md-6 col-xs-12\">
      ";
        // line 67
        $this->displayBlock('left', $context, $blocks);
        // line 70
        echo "      </div>
    </div>
  </div>
</div>

";
        // line 76
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()))) {
            // line 77
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 116
        echo "
";
        // line 118
        $this->displayBlock('main', $context, $blocks);
        // line 185
        echo "


";
        // line 188
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_bottom", array())) {
            // line 189
            echo "  ";
            $this->displayBlock('page_bottom', $context, $blocks);
        }
        // line 195
        echo "
<div class =\"full-footer col-xs-12\">
";
        // line 197
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_left", array())) {
            // line 198
            echo "  ";
            $this->displayBlock('footer_left', $context, $blocks);
        }
        // line 204
        echo "
";
        // line 205
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_right", array())) {
            // line 206
            echo "  ";
            $this->displayBlock('footer_right', $context, $blocks);
        }
        // line 212
        echo "</div>

";
        // line 214
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "copyright", array())) {
            // line 215
            echo "  <div class =\"copyright\">
  ";
            // line 216
            $this->displayBlock('copyright', $context, $blocks);
            // line 221
            echo "  </div>
";
        }
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

    // line 67
    public function block_left($context, array $blocks = array())
    {
        // line 68
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "left", array()), "html", null, true));
        echo "
      ";
    }

    // line 77
    public function block_navbar($context, array $blocks = array())
    {
        // line 78
        echo "    ";
        // line 79
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 81
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 82
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())))) : ((isset($context["container"]) ? $context["container"] : null))));
        // line 85
        echo "    <div class=\"header-wrapper\">
    <header";
        // line 86
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "addClass", array(0 => (isset($context["navbar_classes"]) ? $context["navbar_classes"] : null)), "method"), "removeClass", array(0 => (isset($context["container"]) ? $context["container"] : null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 87
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => (isset($context["container"]) ? $context["container"] : null)), "method")) {
            // line 88
            echo "        <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
            echo "\">
      ";
        }
        // line 90
        echo "      <div class=\"navbar-header\">
        ";
        // line 91
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 93
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 94
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 95
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 101
        echo "      </div>

      ";
        // line 104
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 105
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 106
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 109
        echo "      ";
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => (isset($context["container"]) ? $context["container"] : null)), "method")) {
            // line 110
            echo "        </div>
      ";
        }
        // line 112
        echo "    </header>
    </div>
  ";
    }

    // line 118
    public function block_main($context, array $blocks = array())
    {
        // line 119
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 123
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 124
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 129
            echo "      ";
        }
        // line 130
        echo "
      ";
        // line 132
        echo "      <section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">

        ";
        // line 135
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 136
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 139
            echo "        ";
        }
        // line 140
        echo "
        ";
        // line 142
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 143
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 146
            echo "        ";
        }
        // line 147
        echo "

        ";
        // line 150
        echo "        ";
        $this->displayBlock('slider', $context, $blocks);
        // line 157
        echo "
        ";
        // line 159
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 162
        echo "
        ";
        // line 164
        echo "        ";
        $this->displayBlock('feature', $context, $blocks);
        // line 168
        echo "
        ";
        // line 170
        echo "        ";
        $this->displayBlock('news', $context, $blocks);
        // line 174
        echo "
        ";
        // line 176
        echo "        ";
        $this->displayBlock('content2', $context, $blocks);
        // line 181
        echo "      </section>
    </div>
  </div>
";
    }

    // line 124
    public function block_header($context, array $blocks = array())
    {
        // line 125
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 126
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 136
    public function block_highlighted($context, array $blocks = array())
    {
        // line 137
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
    }

    // line 143
    public function block_help($context, array $blocks = array())
    {
        // line 144
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
          ";
    }

    // line 150
    public function block_slider($context, array $blocks = array())
    {
        // line 151
        echo "          <div class = \"row\">
            <div class =\"slider-block main-content\">
              ";
        // line 153
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slider", array()), "html", null, true));
        echo "
            </div>
          </div>
        ";
    }

    // line 159
    public function block_content($context, array $blocks = array())
    {
        // line 160
        echo "          <div class=\"main-content\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "</div>
        ";
    }

    // line 164
    public function block_feature($context, array $blocks = array())
    {
        // line 165
        echo "          <div class =\"row\">
            <div class=\"col-sm-12 col-md-6\">";
        // line 166
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature", array()), "html", null, true));
        echo "</div>
        ";
    }

    // line 170
    public function block_news($context, array $blocks = array())
    {
        // line 171
        echo "            <div class=\"col-sm-12 col-md-6\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "news", array()), "html", null, true));
        echo "</div>
          </div>
        ";
    }

    // line 176
    public function block_content2($context, array $blocks = array())
    {
        // line 177
        echo "          <div class = \"row\">
            <div class=\"main-content\">";
        // line 178
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content2", array()), "html", null, true));
        echo "</div>
          </div>
        ";
    }

    // line 189
    public function block_page_bottom($context, array $blocks = array())
    {
        // line 190
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo "  col-xs-12\" role=\"contentinfo\">
      ";
        // line 191
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_bottom", array()), "html", null, true));
        echo "
    </footer>
  ";
    }

    // line 198
    public function block_footer_left($context, array $blocks = array())
    {
        // line 199
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo "  col-md-9 col-xs-12\" role=\"contentinfo\">
      ";
        // line 200
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_left", array()), "html", null, true));
        echo "
    </footer>
  ";
    }

    // line 206
    public function block_footer_right($context, array $blocks = array())
    {
        // line 207
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " col-md-3 col-xs-12 \" role=\"contentinfo\">
      ";
        // line 208
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_right", array()), "html", null, true));
        echo "
    </footer>
  ";
    }

    // line 216
    public function block_copyright($context, array $blocks = array())
    {
        // line 217
        echo "    <div class=\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " col-xs-12 \" role=\"contentinfo\">
      ";
        // line 218
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "copyright", array()), "html", null, true));
        echo "
    </div>
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
        return array (  476 => 218,  471 => 217,  468 => 216,  461 => 208,  456 => 207,  453 => 206,  446 => 200,  441 => 199,  438 => 198,  431 => 191,  426 => 190,  423 => 189,  416 => 178,  413 => 177,  410 => 176,  402 => 171,  399 => 170,  393 => 166,  390 => 165,  387 => 164,  380 => 160,  377 => 159,  369 => 153,  365 => 151,  362 => 150,  355 => 144,  352 => 143,  345 => 137,  342 => 136,  335 => 126,  332 => 125,  329 => 124,  322 => 181,  319 => 176,  316 => 174,  313 => 170,  310 => 168,  307 => 164,  304 => 162,  301 => 159,  298 => 157,  295 => 150,  291 => 147,  288 => 146,  285 => 143,  282 => 142,  279 => 140,  276 => 139,  273 => 136,  270 => 135,  264 => 132,  261 => 130,  258 => 129,  255 => 124,  252 => 123,  245 => 119,  242 => 118,  236 => 112,  232 => 110,  229 => 109,  223 => 106,  220 => 105,  217 => 104,  213 => 101,  204 => 95,  201 => 94,  198 => 93,  194 => 91,  191 => 90,  185 => 88,  183 => 87,  179 => 86,  176 => 85,  174 => 82,  173 => 81,  172 => 79,  170 => 78,  167 => 77,  160 => 68,  157 => 67,  150 => 60,  147 => 59,  141 => 221,  139 => 216,  136 => 215,  134 => 214,  130 => 212,  126 => 206,  124 => 205,  121 => 204,  117 => 198,  115 => 197,  111 => 195,  107 => 189,  105 => 188,  100 => 185,  98 => 118,  95 => 116,  91 => 77,  89 => 76,  82 => 70,  80 => 67,  77 => 66,  72 => 62,  70 => 59,  64 => 55,  61 => 53,  59 => 52,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/mouse/templates/system/page.html.twig", "/var/aegir/projects/firass/dev/web/themes/custom/mouse/templates/system/page.html.twig");
    }
}
