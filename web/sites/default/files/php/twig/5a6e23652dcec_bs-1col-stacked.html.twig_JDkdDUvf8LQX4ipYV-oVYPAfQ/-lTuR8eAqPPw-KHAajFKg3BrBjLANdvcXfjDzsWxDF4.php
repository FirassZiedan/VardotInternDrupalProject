<?php

/* modules/contrib/bootstrap_layouts/templates/3.0.0/bs-1col-stacked.html.twig */
class __TwigTemplate_81ac22283a7b275d4687796571d0cb00fcb09e122e4aaa4e993a99cade5154f7 extends Twig_Template
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
        $tags = array("if" => 24);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
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

        // line 21
        echo "<";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["wrapper"] ?? null), "html", null, true));
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">
  ";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_suffix"] ?? null), "contextual_links", array()), "html", null, true));
        echo "

  ";
        // line 24
        if ($this->getAttribute(($context["top"] ?? null), "content", array())) {
            // line 25
            echo "  <";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["top"] ?? null), "wrapper", array()), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["top"] ?? null), "attributes", array()), "html", null, true));
            echo ">
    ";
            // line 26
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["top"] ?? null), "content", array()), "html", null, true));
            echo "
  </";
            // line 27
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["top"] ?? null), "wrapper", array()), "html", null, true));
            echo ">
  ";
        }
        // line 29
        echo "
  ";
        // line 30
        if ($this->getAttribute(($context["main"] ?? null), "content", array())) {
            // line 31
            echo "  <";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["main"] ?? null), "wrapper", array()), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["main"] ?? null), "attributes", array()), "html", null, true));
            echo ">
    ";
            // line 32
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["main"] ?? null), "content", array()), "html", null, true));
            echo "
  </";
            // line 33
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["main"] ?? null), "wrapper", array()), "html", null, true));
            echo ">
  ";
        }
        // line 35
        echo "
  ";
        // line 36
        if ($this->getAttribute(($context["bottom"] ?? null), "content", array())) {
            // line 37
            echo "  <";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["bottom"] ?? null), "wrapper", array()), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["bottom"] ?? null), "attributes", array()), "html", null, true));
            echo ">
    ";
            // line 38
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["bottom"] ?? null), "content", array()), "html", null, true));
            echo "
  </";
            // line 39
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["bottom"] ?? null), "wrapper", array()), "html", null, true));
            echo ">
  ";
        }
        // line 41
        echo "
</";
        // line 42
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["wrapper"] ?? null), "html", null, true));
        echo ">
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/bootstrap_layouts/templates/3.0.0/bs-1col-stacked.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 42,  111 => 41,  106 => 39,  102 => 38,  96 => 37,  94 => 36,  91 => 35,  86 => 33,  82 => 32,  76 => 31,  74 => 30,  71 => 29,  66 => 27,  62 => 26,  56 => 25,  54 => 24,  49 => 22,  43 => 21,);
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
 * Bootstrap Layouts: \"1 Column (stacked)\" template.
 *
 * Available layout variables:
 * - wrapper: Wrapper element for the layout container.
 * - attributes: Wrapper attributes for the layout container.
 *
 * Available region variables:
 * - top
 * - main
 * - bottom
 *
 * Each region variable contains the following properties:
 * - wrapper: The HTML element to use to wrap this region.
 * - attributes: The HTML attributes to use on the wrapper for this region.
 * - content: The content to go inside the wrapper for this region.
 */
#}
<{{ wrapper }}{{ attributes }}>
  {{ title_suffix.contextual_links }}

  {% if top.content %}
  <{{ top.wrapper }}{{ top.attributes }}>
    {{ top.content }}
  </{{ top.wrapper }}>
  {% endif %}

  {% if main.content %}
  <{{ main.wrapper }}{{ main.attributes }}>
    {{ main.content }}
  </{{ main.wrapper }}>
  {% endif %}

  {% if bottom.content %}
  <{{ bottom.wrapper }}{{ bottom.attributes }}>
    {{ bottom.content }}
  </{{ bottom.wrapper }}>
  {% endif %}

</{{ wrapper }}>
", "modules/contrib/bootstrap_layouts/templates/3.0.0/bs-1col-stacked.html.twig", "/var/www/html/drupal/web/modules/contrib/bootstrap_layouts/templates/3.0.0/bs-1col-stacked.html.twig");
    }
}
