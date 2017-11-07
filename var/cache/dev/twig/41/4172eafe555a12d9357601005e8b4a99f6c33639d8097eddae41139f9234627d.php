<?php

/* OCPlatformBundle:Advert:menu.html.twig */
class __TwigTemplate_9a1f8b530c5046869509ce09485b768210b2cb9a3ab922b33184a33f7cf84a2a extends Twig_Template
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
        $__internal_67a054f3d0bfc90a9fe3d6b82f43c4ea21e0d2e9d3928bacea4b9115ba2e9941 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67a054f3d0bfc90a9fe3d6b82f43c4ea21e0d2e9d3928bacea4b9115ba2e9941->enter($__internal_67a054f3d0bfc90a9fe3d6b82f43c4ea21e0d2e9d3928bacea4b9115ba2e9941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:menu.html.twig"));

        $__internal_10e1924c204ab1eb70c8746d6f4ac1aa2022dab8622545f94595fb7e4b2abc81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10e1924c204ab1eb70c8746d6f4ac1aa2022dab8622545f94595fb7e4b2abc81->enter($__internal_10e1924c204ab1eb70c8746d6f4ac1aa2022dab8622545f94595fb7e4b2abc81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:menu.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) || array_key_exists("listAdverts", $context) ? $context["listAdverts"] : (function () { throw new Twig_Error_Runtime('Variable "listAdverts" does not exist.', 6, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 7
            echo "    <li>
      <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "id", array()))), "html", null, true);
            echo "\">
        ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "title", array()), "html", null, true);
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</ul>
";
        
        $__internal_67a054f3d0bfc90a9fe3d6b82f43c4ea21e0d2e9d3928bacea4b9115ba2e9941->leave($__internal_67a054f3d0bfc90a9fe3d6b82f43c4ea21e0d2e9d3928bacea4b9115ba2e9941_prof);

        
        $__internal_10e1924c204ab1eb70c8746d6f4ac1aa2022dab8622545f94595fb7e4b2abc81->leave($__internal_10e1924c204ab1eb70c8746d6f4ac1aa2022dab8622545f94595fb7e4b2abc81_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  43 => 9,  39 => 8,  36 => 7,  32 => 6,  28 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/menu.html.twig #}

{# Ce template n'hérite de personne, tout comme le template inclus avec {{ include() }}. #}

<ul class=\"nav nav-pills nav-stacked\">
  {% for advert in listAdverts %}
    <li>
      <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\">
        {{ advert.title }}
      </a>
    </li>
  {% endfor %}
</ul>
", "OCPlatformBundle:Advert:menu.html.twig", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/src/OC/PlatformBundle/Resources/views/Advert/menu.html.twig");
    }
}
