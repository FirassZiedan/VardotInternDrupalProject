<?php

/* modules/contrib/bootstrap_layouts/templates/3.0.0/bs-2col-bricked.html.twig */
class __TwigTemplate_c535dce40ed24b813089a4e770609ba62774295c5ae95dab4d310e19d38cd33f extends Twig_Template
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
        $tags = array("if" => 28);
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

        // line 25
        echo "<";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["wrapper"]) ? $context["wrapper"] : null), "html", null, true));
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  ";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["title_suffix"]) ? $context["title_suffix"] : null), "contextual_links", array()), "html", null, true));
        echo "

  ";
        // line 28
        if ($this->getAttribute((isset($context["top"]) ? $context["top"] : null), "content", array())) {
            // line 29
            echo "  <";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["top"]) ? $context["top"] : null), "wrapper", array()), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["top"]) ? $context["top"] : null), "attributes", array()), "html", null, true));
            echo ">
    ";
            // line 30
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["top"]) ? $context["top"] : null), "content", array()), "html", null, true));
            echo "
  </";
            // line 31
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["top"]) ? $context["top"] : null), "wrapper", array()), "html", null, true));
            echo ">
  ";
        }
        // line 33
        echo "
  ";
        // line 34
        if ($this->getAttribute((isset($context["top_left"]) ? $context["top_left"] : null), "content", array())) {
            // line 35
            echo "  <";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["top_left"]) ? $context["top_left"] : null), "wrapper", array()), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["top_left"]) ? $context["top_left"] : null), "attributes", array()), "html", null, true));
            echo ">
    ";
            // line 36
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["top_left"]) ? $context["top_left"] : null), "content", array()), "html", null, true));
            echo "
  </";
            // line 37
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["top_left"]) ? $context["top_left"] : null), "wrapper", array()), "html", null, true));
            echo ">
  ";
        }
        // line 39
        echo "
  ";
        // line 40
        if ($this->getAttribute((isset($context["top_right"]) ? $context["top_right"] : null), "content", array())) {
            // line 41
            echo "  <";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["top_right"]) ? $context["top_right"] : null), "wrapper", array()), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["top_right"]) ? $context["top_right"] : null), "attributes", array()), "html", null, true));
            echo ">
    ";
            // line 42
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["top_right"]) ? $context["top_right"] : null), "content", array()), "html", null, true));
            echo "
  </";
            // line 43
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["top_right"]) ? $context["top_right"] : null), "wrapper", array()), "html", null, true));
            echo ">
  ";
        }
        // line 45
        echo "
  ";
        // line 46
        if ($this->getAttribute((isset($context["middle"]) ? $context["middle"] : null), "content", array())) {
            // line 47
            echo "  <";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["middle"]) ? $context["middle"] : null), "wrapper", array()), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["middle"]) ? $context["middle"] : null), "attributes", array()), "html", null, true));
            echo ">
    ";
            // line 48
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["middle"]) ? $context["middle"] : null), "content", array()), "html", null, true));
            echo "
  </";
            // line 49
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["middle"]) ? $context["middle"] : null), "wrapper", array()), "html", null, true));
            echo ">
  ";
        }
        // line 51
        echo "
  ";
        // line 52
        if ($this->getAttribute((isset($context["bottom_left"]) ? $context["bottom_left"] : null), "content", array())) {
            // line 53
            echo "  <";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["bottom_left"]) ? $context["bottom_left"] : null), "wrapper", array()), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["bottom_left"]) ? $context["bottom_left"] : null), "attributes", array()), "html", null, true));
            echo ">
    ";
            // line 54
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["bottom_left"]) ? $context["bottom_left"] : null), "content", array()), "html", null, true));
            echo "
  </";
            // line 55
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["bottom_left"]) ? $context["bottom_left"] : null), "wrapper", array()), "html", null, true));
            echo ">
  ";
        }
        // line 57
        echo "
  ";
        // line 58
        if ($this->getAttribute((isset($context["bottom_right"]) ? $context["bottom_right"] : null), "content", array())) {
            // line 59
            echo "  <";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["bottom_right"]) ? $context["bottom_right"] : null), "wrapper", array()), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["bottom_right"]) ? $context["bottom_right"] : null), "attributes", array()), "html", null, true));
            echo ">
    ";
            // line 60
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["bottom_right"]) ? $context["bottom_right"] : null), "content", array()), "html", null, true));
            echo "
  </";
            // line 61
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["bottom_right"]) ? $context["bottom_right"] : null), "wrapper", array()), "html", null, true));
            echo ">
  ";
        }
        // line 63
        echo "
  ";
        // line 64
        if ($this->getAttribute((isset($context["bottom"]) ? $context["bottom"] : null), "content", array())) {
            // line 65
            echo "  <";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["bottom"]) ? $context["bottom"] : null), "wrapper", array()), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["bottom"]) ? $context["bottom"] : null), "attributes", array()), "html", null, true));
            echo ">
    ";
            // line 66
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["bottom"]) ? $context["bottom"] : null), "content", array()), "html", null, true));
            echo "
  </";
            // line 67
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["bottom"]) ? $context["bottom"] : null), "wrapper", array()), "html", null, true));
            echo ">
  ";
        }
        // line 69
        echo "
</";
        // line 70
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["wrapper"]) ? $context["wrapper"] : null), "html", null, true));
        echo ">
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/bootstrap_layouts/templates/3.0.0/bs-2col-bricked.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 70,  191 => 69,  186 => 67,  182 => 66,  176 => 65,  174 => 64,  171 => 63,  166 => 61,  162 => 60,  156 => 59,  154 => 58,  151 => 57,  146 => 55,  142 => 54,  136 => 53,  134 => 52,  131 => 51,  126 => 49,  122 => 48,  116 => 47,  114 => 46,  111 => 45,  106 => 43,  102 => 42,  96 => 41,  94 => 40,  91 => 39,  86 => 37,  82 => 36,  76 => 35,  74 => 34,  71 => 33,  66 => 31,  62 => 30,  56 => 29,  54 => 28,  49 => 26,  43 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/bootstrap_layouts/templates/3.0.0/bs-2col-bricked.html.twig", "/var/aegir/projects/firass/dev/web/modules/contrib/bootstrap_layouts/templates/3.0.0/bs-2col-bricked.html.twig");
    }
}
