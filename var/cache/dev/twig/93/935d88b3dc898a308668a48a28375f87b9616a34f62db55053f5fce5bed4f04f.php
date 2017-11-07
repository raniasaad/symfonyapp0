<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_eebf265b945351ff1ae5e8fbf136104642ccdcfb0407c89cb770a87f07478daf extends Twig_Template
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
        $__internal_4aafcc9903d65f9cedc725be5e24243e3a003151878d3cb6da4ac1d074bcf461 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aafcc9903d65f9cedc725be5e24243e3a003151878d3cb6da4ac1d074bcf461->enter($__internal_4aafcc9903d65f9cedc725be5e24243e3a003151878d3cb6da4ac1d074bcf461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_2666d2543e5643f0adf57e740c3c60043b4fc302b2a1b4f859b16eb2d5545841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2666d2543e5643f0adf57e740c3c60043b4fc302b2a1b4f859b16eb2d5545841->enter($__internal_2666d2543e5643f0adf57e740c3c60043b4fc302b2a1b4f859b16eb2d5545841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_4aafcc9903d65f9cedc725be5e24243e3a003151878d3cb6da4ac1d074bcf461->leave($__internal_4aafcc9903d65f9cedc725be5e24243e3a003151878d3cb6da4ac1d074bcf461_prof);

        
        $__internal_2666d2543e5643f0adf57e740c3c60043b4fc302b2a1b4f859b16eb2d5545841->leave($__internal_2666d2543e5643f0adf57e740c3c60043b4fc302b2a1b4f859b16eb2d5545841_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
