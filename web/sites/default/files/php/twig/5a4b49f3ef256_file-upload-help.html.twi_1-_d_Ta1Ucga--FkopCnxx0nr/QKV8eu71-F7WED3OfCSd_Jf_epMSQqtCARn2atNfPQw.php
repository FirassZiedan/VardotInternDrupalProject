<?php

/* themes/custom/mouse/templates/file/file-upload-help.html.twig */
class __TwigTemplate_3fd63f1ba7eb26692788761bfa2718a5b403022cd2250f624eb7c51f5bc98e16 extends Twig_Template
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
        $tags = array("if" => 16);
        $filters = array("safe_join" => 22);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('safe_join'),
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

        // line 16
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 17
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true));
            echo "<br>
";
        }
        // line 19
        if ((isset($context["popover"]) ? $context["popover"] : null)) {
            // line 20
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["popover"]) ? $context["popover"] : null), "html", null, true));
            echo "
";
        } else {
            // line 22
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, (isset($context["descriptions"]) ? $context["descriptions"] : null), "<br>")));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/mouse/templates/file/file-upload-help.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 22,  53 => 20,  51 => 19,  45 => 17,  43 => 16,);
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
 * Theme override to display help text for file fields.
 *
 * Available variables:
 * - description: The normal description for this field, specified by the user.
 * - descriptions: Lines of help text for uploading a file.
 * - popover: Markup to display the descriptions as a popover instead.
 *
 * @ingroup templates
 *
 * @see template_preprocess_file_upload_help()
 */
#}
{% if description %}
  {{ description }}<br>
{% endif %}
{% if popover %}
  {{ popover }}
{% else %}
  {{ descriptions|safe_join('<br>') }}
{% endif %}
", "themes/custom/mouse/templates/file/file-upload-help.html.twig", "/var/www/html/drupal/web/themes/custom/mouse/templates/file/file-upload-help.html.twig");
    }
}
