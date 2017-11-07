<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_d4e5a30a3fb85996420d50dfce3d0ccaf879f513f7e9bc9c245689929e021b54 extends Twig_Template
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
        $__internal_044ca0a24afc31e674ddedd893829907db3c4a3ec1b73277edf3c9ac2ba30c14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_044ca0a24afc31e674ddedd893829907db3c4a3ec1b73277edf3c9ac2ba30c14->enter($__internal_044ca0a24afc31e674ddedd893829907db3c4a3ec1b73277edf3c9ac2ba30c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_592ef532655f7964f4bdb0353edd3fc7a75cb3c5a3bf55c6cf6a0b395f571146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_592ef532655f7964f4bdb0353edd3fc7a75cb3c5a3bf55c6cf6a0b395f571146->enter($__internal_592ef532655f7964f4bdb0353edd3fc7a75cb3c5a3bf55c6cf6a0b395f571146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_044ca0a24afc31e674ddedd893829907db3c4a3ec1b73277edf3c9ac2ba30c14->leave($__internal_044ca0a24afc31e674ddedd893829907db3c4a3ec1b73277edf3c9ac2ba30c14_prof);

        
        $__internal_592ef532655f7964f4bdb0353edd3fc7a75cb3c5a3bf55c6cf6a0b395f571146->leave($__internal_592ef532655f7964f4bdb0353edd3fc7a75cb3c5a3bf55c6cf6a0b395f571146_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
