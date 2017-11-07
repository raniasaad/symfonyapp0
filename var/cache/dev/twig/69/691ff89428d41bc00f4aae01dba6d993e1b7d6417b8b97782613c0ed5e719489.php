<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_7f5de655ec9b716f973a6c72cc00ee386b00c59de52a752d52522d8dcd429a9d extends Twig_Template
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
        $__internal_41f7f6173d7fd01160b64dc8462fdb7d54b61c293a024a97a70b10ef721be18e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41f7f6173d7fd01160b64dc8462fdb7d54b61c293a024a97a70b10ef721be18e->enter($__internal_41f7f6173d7fd01160b64dc8462fdb7d54b61c293a024a97a70b10ef721be18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_13a5ccba407cffe9e2b0d30ebc21ceff4ed4b5f2bd9298749de92fff401c1be6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13a5ccba407cffe9e2b0d30ebc21ceff4ed4b5f2bd9298749de92fff401c1be6->enter($__internal_13a5ccba407cffe9e2b0d30ebc21ceff4ed4b5f2bd9298749de92fff401c1be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_41f7f6173d7fd01160b64dc8462fdb7d54b61c293a024a97a70b10ef721be18e->leave($__internal_41f7f6173d7fd01160b64dc8462fdb7d54b61c293a024a97a70b10ef721be18e_prof);

        
        $__internal_13a5ccba407cffe9e2b0d30ebc21ceff4ed4b5f2bd9298749de92fff401c1be6->leave($__internal_13a5ccba407cffe9e2b0d30ebc21ceff4ed4b5f2bd9298749de92fff401c1be6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
