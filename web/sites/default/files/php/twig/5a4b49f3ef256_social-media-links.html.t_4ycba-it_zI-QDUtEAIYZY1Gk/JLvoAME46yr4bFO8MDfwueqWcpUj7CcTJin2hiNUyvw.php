<?php

/* modules/contrib/social_media/templates/social-media-links.html.twig */
class __TwigTemplate_37320ff804e8aa493dcd25066b7ac2ad94fbef4354ca046b1fc2f1872ecf41c8 extends Twig_Template
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
        $tags = array("set" => 12, "for" => 16, "if" => 17);
        $filters = array("merge" => 18, "json_encode" => 20);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'for', 'if'),
                array('merge', 'json_encode'),
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

        // line 8
        echo "

<div class=\"social-media-sharing\">
  <ul class=\"\">
    ";
        // line 12
        $context["classes"] = array(0 => "share");
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) ? $context["elements"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 17
            echo "      ";
            if (($this->getAttribute($context["element"], "forward_dialog", array()) == 1)) {
                // line 18
                echo "        ";
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => "use-ajax"));
                // line 19
                echo "        ";
                $context["dialogType"] = "data-dialog-type=dialog";
                // line 20
                echo "        ";
                $context["dialogOptions"] = ("data-dialog-options=" . twig_jsonencode_filter(array("width" => "600")));
                // line 21
                echo "      ";
            }
            // line 22
            echo "      <li>
    ";
            // line 23
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["foo"]) ? $context["foo"] : null), "html", null, true));
            echo "
        <a ";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["dialogType"]) ? $context["dialogType"] : null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["dialogOptions"]) ? $context["dialogOptions"] : null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["element"], "attr", array()), "target", array()), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["element"], "attr", array()), "class", array()), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["element"], "api", array()), "html", null, true));
            echo "
          title=\"";
            // line 25
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["element"], "text", array()), "html", null, true));
            echo "\">
          ";
            // line 26
            if ($this->getAttribute($context["element"], "img", array())) {
                // line 27
                echo "            <img alt=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["element"], "text", array()), "html", null, true));
                echo "\" src=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["element"], "img", array()), "html", null, true));
                echo "\">
          ";
            } else {
                // line 29
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["element"], "text", array()), "html", null, true));
                echo "
          ";
            }
            // line 31
            echo "        </a>

      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "  </ul>
</div>

";
    }

    public function getTemplateName()
    {
        return "modules/contrib/social_media/templates/social-media-links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 35,  110 => 31,  104 => 29,  96 => 27,  94 => 26,  90 => 25,  78 => 24,  74 => 23,  71 => 22,  68 => 21,  65 => 20,  62 => 19,  59 => 18,  56 => 17,  51 => 16,  49 => 12,  43 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/social_media/templates/social-media-links.html.twig", "/var/www/html/drupal/web/modules/contrib/social_media/templates/social-media-links.html.twig");
    }
}
