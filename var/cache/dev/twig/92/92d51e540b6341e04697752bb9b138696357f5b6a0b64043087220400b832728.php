<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f6001fc21a3ad110baae05e018c9cea0ecfaf9dc4dbaf26715a240c2ac40ac29 extends Twig_Template
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
        $__internal_ee52b02a914845b152b685dcf17877755b3acdda3917ac5ddc0d667afc1dd8b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee52b02a914845b152b685dcf17877755b3acdda3917ac5ddc0d667afc1dd8b3->enter($__internal_ee52b02a914845b152b685dcf17877755b3acdda3917ac5ddc0d667afc1dd8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_7842f0b915ce9b340029839224bd397bd72db168b1f39008bfa6de6c33721540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7842f0b915ce9b340029839224bd397bd72db168b1f39008bfa6de6c33721540->enter($__internal_7842f0b915ce9b340029839224bd397bd72db168b1f39008bfa6de6c33721540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ee52b02a914845b152b685dcf17877755b3acdda3917ac5ddc0d667afc1dd8b3->leave($__internal_ee52b02a914845b152b685dcf17877755b3acdda3917ac5ddc0d667afc1dd8b3_prof);

        
        $__internal_7842f0b915ce9b340029839224bd397bd72db168b1f39008bfa6de6c33721540->leave($__internal_7842f0b915ce9b340029839224bd397bd72db168b1f39008bfa6de6c33721540_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
