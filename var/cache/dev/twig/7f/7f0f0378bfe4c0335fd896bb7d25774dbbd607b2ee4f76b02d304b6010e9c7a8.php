<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_42121de5013618ac4288a4f506fd0959801e4833d3ad79d0a95ece3577ea66c9 extends Twig_Template
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
        $__internal_3defe9093510600cf1537122db2e918c63c471936042ddd8f3ab4f70b747aeec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3defe9093510600cf1537122db2e918c63c471936042ddd8f3ab4f70b747aeec->enter($__internal_3defe9093510600cf1537122db2e918c63c471936042ddd8f3ab4f70b747aeec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_3dc92a0d8011b702e8b41a10aa5e9a9e7d31e7ea1a9eba3c0f58c17a3ac174b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dc92a0d8011b702e8b41a10aa5e9a9e7d31e7ea1a9eba3c0f58c17a3ac174b7->enter($__internal_3dc92a0d8011b702e8b41a10aa5e9a9e7d31e7ea1a9eba3c0f58c17a3ac174b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_3defe9093510600cf1537122db2e918c63c471936042ddd8f3ab4f70b747aeec->leave($__internal_3defe9093510600cf1537122db2e918c63c471936042ddd8f3ab4f70b747aeec_prof);

        
        $__internal_3dc92a0d8011b702e8b41a10aa5e9a9e7d31e7ea1a9eba3c0f58c17a3ac174b7->leave($__internal_3dc92a0d8011b702e8b41a10aa5e9a9e7d31e7ea1a9eba3c0f58c17a3ac174b7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
