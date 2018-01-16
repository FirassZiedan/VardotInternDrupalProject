<?php

/* modules/contrib/webform/templates/webform-progress.html.twig */
class __TwigTemplate_2b4605ac97ccd51c343ce046c4157fad4d1a77db6b27a1c565d706ffc49f43a4 extends Twig_Template
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
        $tags = array("if" => 26);
        $filters = array();
        $functions = array("attach_library" => 20);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array('attach_library')
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

        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("webform/webform.progress"), "html", null, true));
        echo "

<div class=\"webform-progress\">

  ";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["bar"]) ? $context["bar"] : null), "html", null, true));
        echo "

  ";
        // line 26
        if (((isset($context["summary"]) ? $context["summary"] : null) || (isset($context["percentage"]) ? $context["percentage"] : null))) {
            // line 27
            echo "    <div class=\"webform-progress__status\">
      ";
            // line 28
            if ((isset($context["summary"]) ? $context["summary"] : null)) {
                // line 29
                echo "        <span class=\"webform-progress__summary\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["summary"]) ? $context["summary"] : null), "html", null, true));
                echo "</span>
        ";
                // line 30
                if ((isset($context["percentage"]) ? $context["percentage"] : null)) {
                    // line 31
                    echo "          <span class=\"webform-progress__percentage\">(";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["percentage"]) ? $context["percentage"] : null), "html", null, true));
                    echo ")</span>
        ";
                }
                // line 33
                echo "      ";
            } else {
                // line 34
                echo "        <span class=\"webform-progress__percentage\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["percentage"]) ? $context["percentage"] : null), "html", null, true));
                echo "</span>
      ";
            }
            // line 36
            echo "    </div>
  ";
        }
        // line 38
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-progress.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 38,  84 => 36,  78 => 34,  75 => 33,  69 => 31,  67 => 30,  62 => 29,  60 => 28,  57 => 27,  55 => 26,  50 => 24,  43 => 20,);
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
 * Default theme implementation for webform wizard progress.
 *
 * Available variables:
 * - webform: A webform.
 * - pages: Array of wizard pages.
 * - current_page: Current wizard page.
 * - total_pages: Current wizard page.
 * - summary: Summary of progress.
 * - percentage: Percentage completed.
 * - bar: A progress bar.
 *
 * @see template_preprocess_webform_progress()
 *
 * @ingroup themeable
 */
#}
{{ attach_library('webform/webform.progress') }}

<div class=\"webform-progress\">

  {{ bar }}

  {% if summary or percentage %}
    <div class=\"webform-progress__status\">
      {% if summary %}
        <span class=\"webform-progress__summary\">{{ summary }}</span>
        {% if percentage %}
          <span class=\"webform-progress__percentage\">({{ percentage }})</span>
        {% endif %}
      {% else %}
        <span class=\"webform-progress__percentage\">{{ percentage }}</span>
      {% endif %}
    </div>
  {% endif %}

</div>
", "modules/contrib/webform/templates/webform-progress.html.twig", "/var/www/html/drupal/web/modules/contrib/webform/templates/webform-progress.html.twig");
    }
}
