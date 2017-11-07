<?php

/* OCCoreBundle:Core:index.html.twig */
class __TwigTemplate_41058436f75ceb5b339bcc236eab7612321854a2cb48459f295d59e6d7a101f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCCoreBundle:Core:index.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47360771e79a5fe6a7a06e37d0a39f499539e2f8ad0b467ef1bdea1e8216dad2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47360771e79a5fe6a7a06e37d0a39f499539e2f8ad0b467ef1bdea1e8216dad2->enter($__internal_47360771e79a5fe6a7a06e37d0a39f499539e2f8ad0b467ef1bdea1e8216dad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle:Core:index.html.twig"));

        $__internal_f2224c2370417a6d6c05ed48689a8a98498ea39927423ec3a0ea9a0993151a4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2224c2370417a6d6c05ed48689a8a98498ea39927423ec3a0ea9a0993151a4a->enter($__internal_f2224c2370417a6d6c05ed48689a8a98498ea39927423ec3a0ea9a0993151a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle:Core:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47360771e79a5fe6a7a06e37d0a39f499539e2f8ad0b467ef1bdea1e8216dad2->leave($__internal_47360771e79a5fe6a7a06e37d0a39f499539e2f8ad0b467ef1bdea1e8216dad2_prof);

        
        $__internal_f2224c2370417a6d6c05ed48689a8a98498ea39927423ec3a0ea9a0993151a4a->leave($__internal_f2224c2370417a6d6c05ed48689a8a98498ea39927423ec3a0ea9a0993151a4a_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc408465e7ae31b3e10a1f7e81b6dd86ec33bb3e82616b5ae1bb23b3cfeaaaa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc408465e7ae31b3e10a1f7e81b6dd86ec33bb3e82616b5ae1bb23b3cfeaaaa7->enter($__internal_cc408465e7ae31b3e10a1f7e81b6dd86ec33bb3e82616b5ae1bb23b3cfeaaaa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8045ab7a126eff904bcea35ade06de9b27e28a23bef24428d652973956b76ed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8045ab7a126eff904bcea35ade06de9b27e28a23bef24428d652973956b76ed2->enter($__internal_8045ab7a126eff904bcea35ade06de9b27e28a23bef24428d652973956b76ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Page d'accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8045ab7a126eff904bcea35ade06de9b27e28a23bef24428d652973956b76ed2->leave($__internal_8045ab7a126eff904bcea35ade06de9b27e28a23bef24428d652973956b76ed2_prof);

        
        $__internal_cc408465e7ae31b3e10a1f7e81b6dd86ec33bb3e82616b5ae1bb23b3cfeaaaa7->leave($__internal_cc408465e7ae31b3e10a1f7e81b6dd86ec33bb3e82616b5ae1bb23b3cfeaaaa7_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_ccff150e0c9596cfa2e5b46257f30362cb0281d8254b63a81a710ba4169dbfd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccff150e0c9596cfa2e5b46257f30362cb0281d8254b63a81a710ba4169dbfd7->enter($__internal_ccff150e0c9596cfa2e5b46257f30362cb0281d8254b63a81a710ba4169dbfd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_caa9fd988cc41f79c2d278b257af99c0894323e82c0aa87b966cee894428da5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caa9fd988cc41f79c2d278b257af99c0894323e82c0aa87b966cee894428da5d->enter($__internal_caa9fd988cc41f79c2d278b257af99c0894323e82c0aa87b966cee894428da5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
  <h2>Page d'accueil de notre site</h2>

  ";
        // line 13
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "    <div class=\"alert alert-info\">Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
  ";
        // line 18
        echo "  <h3>Dernières annonces</h3>
  ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("OCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "

  <h3>Derniers messages sur le forum (hypothétique)</h3>
  <p>
    ";
        // line 25
        echo "    Bla bla bla...
  </p>

";
        
        $__internal_caa9fd988cc41f79c2d278b257af99c0894323e82c0aa87b966cee894428da5d->leave($__internal_caa9fd988cc41f79c2d278b257af99c0894323e82c0aa87b966cee894428da5d_prof);

        
        $__internal_ccff150e0c9596cfa2e5b46257f30362cb0281d8254b63a81a710ba4169dbfd7->leave($__internal_ccff150e0c9596cfa2e5b46257f30362cb0281d8254b63a81a710ba4169dbfd7_prof);

    }

    public function getTemplateName()
    {
        return "OCCoreBundle:Core:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 25,  97 => 19,  94 => 18,  91 => 16,  82 => 14,  77 => 13,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# On utilise ici le layout général, qui se situe dans ce même CoreBundle maintenant #}
{% extends \"OCCoreBundle::layout.html.twig\" %}

{% block title %}
  Page d'accueil - {{ parent() }}
{% endblock %}

{% block body %}

  <h2>Page d'accueil de notre site</h2>

  {# On affiche tous les messages flash dont le nom est « info » #}
  {% for message in app.session.flashbag.get('info') %}
    <div class=\"alert alert-info\">Message flash : {{ message }}</div>
  {% endfor %}

  {# Pour afficher les dernières annonces, on réutilise le contrôleur menu du PlatformBundle #}
  <h3>Dernières annonces</h3>
  {{ render(controller(\"OCPlatformBundle:Advert:menu\", {'limit': 3})) }}

  <h3>Derniers messages sur le forum (hypothétique)</h3>
  <p>
    {# Ici, on devrait utiliser un contrôleur d'un éventuel ForumBundle pour afficher les derniers posts sur le forum,
       ce n'est pas le sujet ici #}
    Bla bla bla...
  </p>

{% endblock %}
", "OCCoreBundle:Core:index.html.twig", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/src/OC/CoreBundle/Resources/views/Core/index.html.twig");
    }
}
