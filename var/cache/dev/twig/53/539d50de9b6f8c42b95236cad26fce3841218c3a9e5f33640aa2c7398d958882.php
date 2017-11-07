<?php

/* OCCoreBundle:Core:index.html.twig */
class __TwigTemplate_4669f0968d07ed0b0d124952d32b29f24a22a3a58c2053fb88ae9d6d09de76e8 extends Twig_Template
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
        $__internal_d7267207db3db827afda87affc56bb46d203ff8b25ed13846e6ec883acbd65c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7267207db3db827afda87affc56bb46d203ff8b25ed13846e6ec883acbd65c4->enter($__internal_d7267207db3db827afda87affc56bb46d203ff8b25ed13846e6ec883acbd65c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle:Core:index.html.twig"));

        $__internal_940efb12a0a3e7676eb07922c52e61a8fb2352777e38188a8d721ad013a8c4d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_940efb12a0a3e7676eb07922c52e61a8fb2352777e38188a8d721ad013a8c4d0->enter($__internal_940efb12a0a3e7676eb07922c52e61a8fb2352777e38188a8d721ad013a8c4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle:Core:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7267207db3db827afda87affc56bb46d203ff8b25ed13846e6ec883acbd65c4->leave($__internal_d7267207db3db827afda87affc56bb46d203ff8b25ed13846e6ec883acbd65c4_prof);

        
        $__internal_940efb12a0a3e7676eb07922c52e61a8fb2352777e38188a8d721ad013a8c4d0->leave($__internal_940efb12a0a3e7676eb07922c52e61a8fb2352777e38188a8d721ad013a8c4d0_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_633ab53e5f6ba12344956b4668b58fce0236f1d8eb3e988bdf894131c7fcc340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_633ab53e5f6ba12344956b4668b58fce0236f1d8eb3e988bdf894131c7fcc340->enter($__internal_633ab53e5f6ba12344956b4668b58fce0236f1d8eb3e988bdf894131c7fcc340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_236334c41e2639ee17be62ac6f489722a8670530d14edd8089e3bd965ecc809d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_236334c41e2639ee17be62ac6f489722a8670530d14edd8089e3bd965ecc809d->enter($__internal_236334c41e2639ee17be62ac6f489722a8670530d14edd8089e3bd965ecc809d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Page d'accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_236334c41e2639ee17be62ac6f489722a8670530d14edd8089e3bd965ecc809d->leave($__internal_236334c41e2639ee17be62ac6f489722a8670530d14edd8089e3bd965ecc809d_prof);

        
        $__internal_633ab53e5f6ba12344956b4668b58fce0236f1d8eb3e988bdf894131c7fcc340->leave($__internal_633ab53e5f6ba12344956b4668b58fce0236f1d8eb3e988bdf894131c7fcc340_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_c60f206a7d73ffd7126b340cc875a6fea7b6ff4fe693dd1c646e39286942fa36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c60f206a7d73ffd7126b340cc875a6fea7b6ff4fe693dd1c646e39286942fa36->enter($__internal_c60f206a7d73ffd7126b340cc875a6fea7b6ff4fe693dd1c646e39286942fa36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_78d6900512a4443b35ad750d36fd3f09855223126516e411d871b060394b26aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78d6900512a4443b35ad750d36fd3f09855223126516e411d871b060394b26aa->enter($__internal_78d6900512a4443b35ad750d36fd3f09855223126516e411d871b060394b26aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_78d6900512a4443b35ad750d36fd3f09855223126516e411d871b060394b26aa->leave($__internal_78d6900512a4443b35ad750d36fd3f09855223126516e411d871b060394b26aa_prof);

        
        $__internal_c60f206a7d73ffd7126b340cc875a6fea7b6ff4fe693dd1c646e39286942fa36->leave($__internal_c60f206a7d73ffd7126b340cc875a6fea7b6ff4fe693dd1c646e39286942fa36_prof);

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
