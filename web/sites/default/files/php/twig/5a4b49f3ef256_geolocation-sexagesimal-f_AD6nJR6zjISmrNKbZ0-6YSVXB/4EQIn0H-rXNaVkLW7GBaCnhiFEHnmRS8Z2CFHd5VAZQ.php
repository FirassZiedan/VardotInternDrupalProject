<?php

/* modules/contrib/geolocation/templates/geolocation-sexagesimal-formatter.html.twig */
class __TwigTemplate_d639ac5357b806bafaa5c60863fd7e75232933a33f744b606599a9b97cf03ecd extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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

        // line 15
        echo "<span typeof=\"Place\">
    <span property=\"geo\" typeof=\"GeoCoordinates\">
        <meta property=\"latitude\" content=\"";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["lat"]) ? $context["lat"] : null), "html", null, true));
        echo "\">
        <meta property=\"longitude\" content=\"";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["lng"]) ? $context["lng"] : null), "html", null, true));
        echo "\">
    </span>
    <span class=\"geolocation-sexagesimal\">";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["lat"]) ? $context["lat"] : null), "html", null, true));
        echo ", ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["lng"]) ? $context["lng"] : null), "html", null, true));
        echo "</span>
</span>";
    }

    public function getTemplateName()
    {
        return "modules/contrib/geolocation/templates/geolocation-sexagesimal-formatter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 20,  51 => 18,  47 => 17,  43 => 15,);
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
 * Implementation for a geolocation with latitude, longitude in sexagesimal notation.
 *
 * Available variables:
 * - lat: The latitude value.
 * - lng: The longitude value.
 *
 * @see template_preprocess()
 *
 * @ingroup themeable
 */
#}
<span typeof=\"Place\">
    <span property=\"geo\" typeof=\"GeoCoordinates\">
        <meta property=\"latitude\" content=\"{{ lat }}\">
        <meta property=\"longitude\" content=\"{{ lng }}\">
    </span>
    <span class=\"geolocation-sexagesimal\">{{ lat }}, {{ lng }}</span>
</span>", "modules/contrib/geolocation/templates/geolocation-sexagesimal-formatter.html.twig", "/var/www/html/drupal/web/modules/contrib/geolocation/templates/geolocation-sexagesimal-formatter.html.twig");
    }
}
