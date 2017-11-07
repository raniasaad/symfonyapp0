<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_8684aea78695ed7905dc261447fb0273cf95d756a5786fb3ac7d5aafaad9a840 extends Twig_Template
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
        $__internal_40e18eb0d11ebe24fc4f705db655ea210f821e3ff744991142774ac27fa64a76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40e18eb0d11ebe24fc4f705db655ea210f821e3ff744991142774ac27fa64a76->enter($__internal_40e18eb0d11ebe24fc4f705db655ea210f821e3ff744991142774ac27fa64a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_1d0e95f0eeb66587e7d09cc000454a7221be1ef0f65fa7cb0af742330d070373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d0e95f0eeb66587e7d09cc000454a7221be1ef0f65fa7cb0af742330d070373->enter($__internal_1d0e95f0eeb66587e7d09cc000454a7221be1ef0f65fa7cb0af742330d070373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_40e18eb0d11ebe24fc4f705db655ea210f821e3ff744991142774ac27fa64a76->leave($__internal_40e18eb0d11ebe24fc4f705db655ea210f821e3ff744991142774ac27fa64a76_prof);

        
        $__internal_1d0e95f0eeb66587e7d09cc000454a7221be1ef0f65fa7cb0af742330d070373->leave($__internal_1d0e95f0eeb66587e7d09cc000454a7221be1ef0f65fa7cb0af742330d070373_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
