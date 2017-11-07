<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_c41015bd356336e1d51cc7fc6517077d2a25a1cd036a98a187e57101a5b17586 extends Twig_Template
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
        $__internal_b9e60ebeb4d706f68ae7f24cb948f10bce42af5c1f71167a303433dcde8b5fa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9e60ebeb4d706f68ae7f24cb948f10bce42af5c1f71167a303433dcde8b5fa8->enter($__internal_b9e60ebeb4d706f68ae7f24cb948f10bce42af5c1f71167a303433dcde8b5fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_fdf278206a998ccffa039e326ce4027cc6057c9c28af5ab056c0589c18648b2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdf278206a998ccffa039e326ce4027cc6057c9c28af5ab056c0589c18648b2e->enter($__internal_fdf278206a998ccffa039e326ce4027cc6057c9c28af5ab056c0589c18648b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_b9e60ebeb4d706f68ae7f24cb948f10bce42af5c1f71167a303433dcde8b5fa8->leave($__internal_b9e60ebeb4d706f68ae7f24cb948f10bce42af5c1f71167a303433dcde8b5fa8_prof);

        
        $__internal_fdf278206a998ccffa039e326ce4027cc6057c9c28af5ab056c0589c18648b2e->leave($__internal_fdf278206a998ccffa039e326ce4027cc6057c9c28af5ab056c0589c18648b2e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
