<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* qihaoyang/view/template/catalog/product_form.twig */
class __TwigTemplate_48cf3b3b1134c4d4ab0341aab3208315 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-product\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["master_id"] ?? null)) {
            // line 18
            echo "      <div class=\"alert alert-warning\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
            echo ($context["text_variant"] ?? null);
            echo "</div>
    ";
        }
        // line 20
        echo "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 21
        echo ($context["text_form"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form id=\"form-product\" action=\"";
        // line 23
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">

          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 26
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-data\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 27
        echo ($context["tab_data"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-links\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 28
        echo ($context["tab_links"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-attribute\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 29
        echo ($context["tab_attribute"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-option\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 30
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-subscription\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 31
        echo ($context["tab_subscription"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-discount\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 32
        echo ($context["tab_discount"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-special\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 33
        echo ($context["tab_special"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-image\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 34
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-reward\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 35
        echo ($context["tab_reward"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-seo\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 36
        echo ($context["tab_seo"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-design\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 37
        echo ($context["tab_design"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-report\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 38
        echo ($context["tab_report"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\">
                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 44
            echo "                  <li class=\"nav-item\"><a href=\"#language-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 44);
            echo "\" data-bs-toggle=\"tab\" class=\"nav-link";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 44)) {
                echo " active";
            }
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 44);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 44);
            echo "\"/> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 44);
            echo "</a></li>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "              </ul>
              <div class=\"tab-content\">
                ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 49
            echo "                  <div id=\"language-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 49);
            echo "\" class=\"tab-pane";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 49)) {
                echo " active";
            }
            echo "\">
                    <div class=\"row mb-3 required\">
                      <label for=\"input-name-";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 51);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_name"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"product_description[";
            // line 54
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54);
            echo "][name]\" value=\"";
            echo (((($__internal_compile_0 = ($context["product_description"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["product_description"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54)] ?? null) : null), "name", [], "any", false, false, false, 54)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" id=\"input-name-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54);
            echo "\" class=\"form-control\"/>
                          ";
            // line 55
            if (($context["master_id"] ?? null)) {
                // line 56
                echo "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 58);
                echo "][name]\" value=\"1\" id=\"input-variant-name-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 58);
                echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-name-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 58);
                echo "\" class=\"form-check-input\"";
                if (twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 58)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 58)] ?? null) : null), "name", [], "any", false, false, false, 58)) {
                    echo " checked";
                }
                echo "/>
                                <label for=\"input-variant-name-";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 59);
                echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 63
            echo "                        </div>
                        <div id=\"error-name-";
            // line 64
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 64);
            echo "\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-description-";
            // line 68
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 68);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <div class=\"form-control h-100 p-0 border-0 rounded-0\">
                            <textarea name=\"product_description[";
            // line 72
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-description-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72);
            echo "\" data-oc-toggle=\"ckeditor\" data-lang=\"";
            echo ($context["ckeditor"] ?? null);
            echo "\" class=\"w-100 position-relative\">";
            echo (((($__internal_compile_3 = ($context["product_description"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = ($context["product_description"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72)] ?? null) : null), "description", [], "any", false, false, false, 72)) : (""));
            echo "</textarea>
                          </div>
                          ";
            // line 74
            if (($context["master_id"] ?? null)) {
                // line 75
                echo "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 77);
                echo "][description]\" value=\"1\" id=\"input-variant-description-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 77);
                echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-description-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 77);
                echo "\" class=\"form-check-input\"";
                if (twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 77)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 77)] ?? null) : null), "description", [], "any", false, false, false, 77)) {
                    echo " checked";
                }
                echo "/> <label for=\"input-variant-description-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 77);
                echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 81
            echo "                        </div>
                      </div>
                    </div>
                    <div class=\"row mb-3 required\">
                      <label for=\"input-meta-title-";
            // line 85
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 85);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_meta_title"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"product_description[";
            // line 88
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 88);
            echo "][meta_title]\" value=\"";
            echo (((($__internal_compile_6 = ($context["product_description"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 88)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = ($context["product_description"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 88)] ?? null) : null), "meta_title", [], "any", false, false, false, 88)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_meta_title"] ?? null);
            echo "\" id=\"input-meta-title-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 88);
            echo "\" class=\"form-control\"/>
                          ";
            // line 89
            if (($context["master_id"] ?? null)) {
                // line 90
                echo "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 92);
                echo "][meta_title]\" value=\"1\" id=\"input-variant-meta-title-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 92);
                echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-title-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 92);
                echo "\" class=\"form-check-input\"";
                if (twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 92)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 92)] ?? null) : null), "meta_title", [], "any", false, false, false, 92)) {
                    echo " checked";
                }
                echo "/> <label for=\"input-variant-meta-title-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 92);
                echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 96
            echo "                        </div>
                        <div id=\"error-meta-title-";
            // line 97
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 97);
            echo "\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-meta-description-";
            // line 101
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 101);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_meta_description"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <textarea name=\"product_description[";
            // line 104
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 104);
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_description"] ?? null);
            echo "\" id=\"input-meta-description-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 104);
            echo "\" class=\"form-control\">";
            echo (((($__internal_compile_9 = ($context["product_description"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 104)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_10 = ($context["product_description"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 104)] ?? null) : null), "meta_description", [], "any", false, false, false, 104)) : (""));
            echo "</textarea>
                          ";
            // line 105
            if (($context["master_id"] ?? null)) {
                // line 106
                echo "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 108
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 108);
                echo "][meta_description]\" value=\"1\" id=\"input-variant-meta-description-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 108);
                echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-description-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 108);
                echo "\" class=\"form-check-input\"";
                if (twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 108)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 108)] ?? null) : null), "meta_description", [], "any", false, false, false, 108)) {
                    echo " checked";
                }
                echo "/> <label for=\"input-variant-meta-description-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 108);
                echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 112
            echo "                        </div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-meta-keyword-";
            // line 116
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 116);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <textarea name=\"product_description[";
            // line 119
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 119);
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\" id=\"input-meta-keyword-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 119);
            echo "\" class=\"form-control\">";
            echo (((($__internal_compile_12 = ($context["product_description"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 119)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = ($context["product_description"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 119)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 119)) : (""));
            echo "</textarea>
                          ";
            // line 120
            if (($context["master_id"] ?? null)) {
                // line 121
                echo "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 123
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 123);
                echo "][meta_keyword]\" value=\"1\" id=\"input-variant-meta-keyword-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 123);
                echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-keyword-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 123);
                echo "\" class=\"form-check-input\"";
                if (twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 123)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 123)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 123)) {
                    echo " checked";
                }
                echo "/> <label for=\"input-variant-meta-keyword-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 123);
                echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 127
            echo "                        </div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-tag-";
            // line 131
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 131);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_tag"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"product_description[";
            // line 134
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 134);
            echo "][tag]\" value=\"";
            echo (((($__internal_compile_15 = ($context["product_description"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 134)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_16 = ($context["product_description"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 134)] ?? null) : null), "tag", [], "any", false, false, false, 134)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_tag"] ?? null);
            echo "\" id=\"input-tag-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 134);
            echo "\" class=\"form-control\"/>
                          ";
            // line 135
            if (($context["master_id"] ?? null)) {
                // line 136
                echo "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 138
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 138);
                echo "][tag]\" value=\"1\" id=\"input-variant-tag-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 138);
                echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-tag-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 138);
                echo "\" class=\"form-check-input\"";
                if (twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 138)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 138)] ?? null) : null), "tag", [], "any", false, false, false, 138)) {
                    echo " checked";
                }
                echo "/> <label for=\"input-variant-tag-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 138);
                echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 142
            echo "                        </div>
                        <div class=\"form-text\">";
            // line 143
            echo ($context["help_tag"] ?? null);
            echo "</div>
                      </div>
                    </div>
                  </div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "              </div>
            </div>
            <div id=\"tab-data\" class=\"tab-pane\">
              <input type=\"hidden\" name=\"master_id\" value=\"";
        // line 151
        echo ($context["master_id"] ?? null);
        echo "\"/>
              <fieldset>
                <legend>";
        // line 153
        echo ($context["text_model"] ?? null);
        echo "</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-model\" class=\"col-sm-2 col-form-label\">";
        // line 155
        echo ($context["entry_model"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"model\" value=\"";
        // line 158
        echo ($context["model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\"/>
                      ";
        // line 159
        if (($context["master_id"] ?? null)) {
            // line 160
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[model]\" value=\"1\" id=\"input-variant-model\" data-oc-toggle=\"switch\" data-oc-target=\"#input-model\" class=\"form-check-input\"";
            // line 162
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "model", [], "any", false, false, false, 162)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-model\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 166
        echo "                    </div>
                    <div id=\"error-model\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-sku\" class=\"col-sm-2 col-form-label\">";
        // line 171
        echo ($context["entry_sku"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"sku\" value=\"";
        // line 174
        echo ($context["sku"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sku"] ?? null);
        echo "\" id=\"input-sku\" class=\"form-control\"/>
                      ";
        // line 175
        if (($context["master_id"] ?? null)) {
            // line 176
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[sku]\" value=\"1\" id=\"input-variant-sku\" data-oc-toggle=\"switch\" data-oc-target=\"#input-sku\" class=\"form-check-input\"";
            // line 178
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "sku", [], "any", false, false, false, 178)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-sku\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 182
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 183
        echo ($context["help_sku"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-upc\" class=\"col-sm-2 col-form-label\">";
        // line 187
        echo ($context["entry_upc"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"upc\" value=\"";
        // line 190
        echo ($context["upc"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_upc"] ?? null);
        echo "\" id=\"input-upc\" class=\"form-control\"/>
                      ";
        // line 191
        if (($context["master_id"] ?? null)) {
            // line 192
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[upc]\" value=\"1\" id=\"input-variant-upc\" data-oc-toggle=\"switch\" data-oc-target=\"#input-upc\" class=\"form-check-input\"";
            // line 194
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "upc", [], "any", false, false, false, 194)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-upc\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 198
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 199
        echo ($context["help_upc"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-ean\" class=\"col-sm-2 col-form-label\">";
        // line 203
        echo ($context["entry_ean"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"ean\" value=\"";
        // line 206
        echo ($context["ean"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_ean"] ?? null);
        echo "\" id=\"input-ean\" class=\"form-control\"/>
                      ";
        // line 207
        if (($context["master_id"] ?? null)) {
            // line 208
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[ean]\" value=\"1\" id=\"input-variant-ean\" data-oc-toggle=\"switch\" data-oc-target=\"#input-ean\" class=\"form-check-input\"";
            // line 210
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "ean", [], "any", false, false, false, 210)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-ean\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 214
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 215
        echo ($context["help_ean"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-jan\" class=\"col-sm-2 col-form-label\">";
        // line 219
        echo ($context["entry_jan"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"jan\" value=\"";
        // line 222
        echo ($context["jan"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_jan"] ?? null);
        echo "\" id=\"input-jan\" class=\"form-control\"/>
                      ";
        // line 223
        if (($context["master_id"] ?? null)) {
            // line 224
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[jan]\" value=\"1\" id=\"input-variant-jan\" data-oc-toggle=\"switch\" data-oc-target=\"#input-jan\" class=\"form-check-input\"";
            // line 226
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "jan", [], "any", false, false, false, 226)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-jan\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 230
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 231
        echo ($context["help_jan"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-isbn\" class=\"col-sm-2 col-form-label\">";
        // line 235
        echo ($context["entry_isbn"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"isbn\" value=\"";
        // line 238
        echo ($context["isbn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_isbn"] ?? null);
        echo "\" id=\"input-isbn\" class=\"form-control\"/>
                      ";
        // line 239
        if (($context["master_id"] ?? null)) {
            // line 240
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[isbn]\" value=\"1\" id=\"input-variant-isbn\" data-oc-toggle=\"switch\" data-oc-target=\"#input-isbn\" class=\"form-check-input\"";
            // line 242
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "isbn", [], "any", false, false, false, 242)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-isbn\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 246
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 247
        echo ($context["help_isbn"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mpn\" class=\"col-sm-2 col-form-label\">";
        // line 251
        echo ($context["entry_mpn"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"mpn\" value=\"";
        // line 254
        echo ($context["mpn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mpn"] ?? null);
        echo "\" id=\"input-mpn\" class=\"form-control\"/>
                      ";
        // line 255
        if (($context["master_id"] ?? null)) {
            // line 256
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[mpn]\" value=\"1\" id=\"input-variant-mpn\" data-oc-toggle=\"switch\" data-oc-target=\"#input-mpn\" class=\"form-check-input\"";
            // line 258
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "mpn", [], "any", false, false, false, 258)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-mpn\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 262
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 263
        echo ($context["help_mpn"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-location\" class=\"col-sm-2 col-form-label\">";
        // line 267
        echo ($context["entry_location"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"location\" value=\"";
        // line 270
        echo ($context["location"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_location"] ?? null);
        echo "\" id=\"input-location\" class=\"form-control\"/>
                      ";
        // line 271
        if (($context["master_id"] ?? null)) {
            // line 272
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[location]\" value=\"1\" id=\"input-variant-location\" data-oc-toggle=\"switch\" data-oc-target=\"#input-location\" class=\"form-check-input\"";
            // line 274
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "location", [], "any", false, false, false, 274)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-location\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 278
        echo "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 283
        echo ($context["text_price"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-price\" class=\"col-sm-2 col-form-label\">";
        // line 285
        echo ($context["entry_price"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"price\" value=\"";
        // line 288
        echo ($context["price"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_price"] ?? null);
        echo "\" id=\"input-price\" class=\"form-control\"/>
                      ";
        // line 289
        if (($context["master_id"] ?? null)) {
            // line 290
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[price]\" value=\"1\" id=\"input-variant-price\" data-oc-toggle=\"switch\" data-oc-target=\"#input-price\" class=\"form-check-input\"";
            // line 292
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "price", [], "any", false, false, false, 292)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-price\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 296
        echo "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-tax-class\" class=\"col-sm-2 col-form-label\">";
        // line 300
        echo ($context["entry_tax_class"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-select\">
                        <option value=\"0\">";
        // line 304
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 305
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 306
            echo "                          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 306);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 306) == ($context["tax_class_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 306);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 308
        echo "                      </select>
                      ";
        // line 309
        if (($context["master_id"] ?? null)) {
            // line 310
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[tax_class_id]\" value=\"1\" id=\"input-variant-tax-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-tax-class\" class=\"form-check-input\"";
            // line 312
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "tax_class_id", [], "any", false, false, false, 312)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-tax-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 316
        echo "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 321
        echo ($context["text_stock"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-quantity\" class=\"col-sm-2 col-form-label\">";
        // line 323
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"quantity\" value=\"";
        // line 325
        echo ($context["quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-minimum\" class=\"col-sm-2 col-form-label\">";
        // line 329
        echo ($context["entry_minimum"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"minimum\" value=\"";
        // line 332
        echo ($context["minimum"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_minimum"] ?? null);
        echo "\" id=\"input-minimum\" class=\"form-control\"/>
                      ";
        // line 333
        if (($context["master_id"] ?? null)) {
            // line 334
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[minimum]\" value=\"1\" id=\"input-variant-minimum\" data-oc-toggle=\"switch\" data-oc-target=\"#input-minimum\" class=\"form-check-input\"";
            // line 336
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "minimum", [], "any", false, false, false, 336)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-minimum\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 340
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 341
        echo ($context["help_minimum"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 345
        echo ($context["entry_subtract"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">

                    <div class=\"input-group\">

                      <div id=\"input-subtract\" class=\"form-check form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"subtract\" value=\"0\"/> <input type=\"checkbox\" name=\"subtract\" value=\"1\" class=\"form-check-input\"";
        // line 351
        if (($context["subtract"] ?? null)) {
            echo " checked";
        }
        echo "/>
                      </div>

                      ";
        // line 354
        if (($context["master_id"] ?? null)) {
            // line 355
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[subtract]\" value=\"1\" id=\"input-variant-subtract\" data-oc-toggle=\"switch\" data-oc-target=\"#input-subtract\" class=\"form-check-input\"";
            // line 357
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "subtract", [], "any", false, false, false, 357)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-subtract\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 361
        echo "
                    </div>

                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-stock-status\" class=\"col-sm-2 col-form-label\">";
        // line 367
        echo ($context["entry_stock_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-select\">
                        ";
        // line 371
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stock_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 372
            echo "                          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 372);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 372) == ($context["stock_status_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 372);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 374
        echo "                      </select>
                      ";
        // line 375
        if (($context["master_id"] ?? null)) {
            // line 376
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[stock_status_id]\" value=\"1\" id=\"input-variant-stock-status\" data-oc-toggle=\"switch\" data-oc-target=\"#input-stock-status\" class=\"form-check-input\"";
            // line 378
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "stock_status_id", [], "any", false, false, false, 378)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-stock-status\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 382
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 383
        echo ($context["help_stock_status"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-date-available\" class=\"col-sm-2 col-form-label\">";
        // line 387
        echo ($context["entry_date_available"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10 col-md-4\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"date_available\" value=\"";
        // line 390
        echo ($context["date_available"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_available"] ?? null);
        echo "\" id=\"input-date-available\" class=\"form-control date\"/>
                      <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                      ";
        // line 392
        if (($context["master_id"] ?? null)) {
            // line 393
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[date_available]\" value=\"1\" id=\"input-variant-date-available\" data-oc-toggle=\"switch\" data-oc-target=\"#input-date-available\" class=\"form-check-input\"";
            // line 395
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "date_available", [], "any", false, false, false, 395)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-date-available\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 399
        echo "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 404
        echo ($context["text_specification"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 406
        echo ($context["entry_shipping"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">

                      <div id=\"input-shipping\" class=\"form-check form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"shipping\" value=\"0\"/> <input type=\"checkbox\" name=\"shipping\" value=\"1\" class=\"form-check-input\"";
        // line 411
        if (($context["shipping"] ?? null)) {
            echo " checked";
        }
        echo "/>
                      </div>

                      ";
        // line 414
        if (($context["master_id"] ?? null)) {
            // line 415
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[shipping]\" value=\"1\" id=\"input-variant-shipping\" data-oc-toggle=\"switch\" data-oc-target=\"#input-shipping\" class=\"form-check-input\"";
            // line 417
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "shipping", [], "any", false, false, false, 417)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-shipping\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 421
        echo "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-length\" class=\"col-sm-2 col-form-label\">";
        // line 425
        echo ($context["entry_dimension"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"length\" value=\"";
        // line 428
        echo ($context["length"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_length"] ?? null);
        echo "\" id=\"input-length\" class=\"form-control\"/>
                      ";
        // line 429
        if (($context["master_id"] ?? null)) {
            // line 430
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[length]\" value=\"1\" id=\"input-variant-length\" data-oc-toggle=\"switch\" data-oc-target=\"#input-length\" class=\"form-check-input\"";
            // line 432
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "length", [], "any", false, false, false, 432)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-length\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 436
        echo "                      <input type=\"text\" name=\"width\" value=\"";
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\"/>
                      ";
        // line 437
        if (($context["master_id"] ?? null)) {
            // line 438
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[width]\" value=\"1\" id=\"input-variant-width\" data-oc-toggle=\"switch\" data-oc-target=\"#input-width\" class=\"form-check-input\"";
            // line 440
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "width", [], "any", false, false, false, 440)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-width\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 444
        echo "                      <input type=\"text\" name=\"height\" value=\"";
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\"/>
                      ";
        // line 445
        if (($context["master_id"] ?? null)) {
            // line 446
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[height]\" value=\"1\" id=\"input-variant-height\" data-oc-toggle=\"switch\" data-oc-target=\"#input-height\" class=\"form-check-input\"";
            // line 448
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "height", [], "any", false, false, false, 448)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-height\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 452
        echo "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-length-class\" class=\"col-sm-2 col-form-label\">";
        // line 456
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-select\">
                        ";
        // line 460
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 461
            echo "                          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 461);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 461) == ($context["length_class_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 461);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 463
        echo "                      </select>
                      ";
        // line 464
        if (($context["master_id"] ?? null)) {
            // line 465
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[length_class_id]\" value=\"1\" id=\"input-variant-length-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-length-class\" class=\"form-check-input\"";
            // line 467
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "length_class_id", [], "any", false, false, false, 467)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-length-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 471
        echo "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-weight\" class=\"col-sm-2 col-form-label\">";
        // line 475
        echo ($context["entry_weight"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"weight\" value=\"";
        // line 478
        echo ($context["weight"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_weight"] ?? null);
        echo "\" id=\"input-weight\" class=\"form-control\"/>
                      ";
        // line 479
        if (($context["master_id"] ?? null)) {
            // line 480
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[weight]\" value=\"1\" id=\"input-variant-weight\" data-oc-toggle=\"switch\" data-oc-target=\"#input-weight\" class=\"form-check-input\"";
            // line 482
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "weight", [], "any", false, false, false, 482)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-weight\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 486
        echo "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-weight-class\" class=\"col-sm-2 col-form-label\">";
        // line 490
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-select\">
                        ";
        // line 494
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 495
            echo "                          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 495);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 495) == ($context["weight_class_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 495);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 497
        echo "                      </select>
                      ";
        // line 498
        if (($context["master_id"] ?? null)) {
            // line 499
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[weight_class_id]\" value=\"1\" id=\"input-variant-weight-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-weight-class\" class=\"form-check-input\"";
            // line 501
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "weight_class_id", [], "any", false, false, false, 501)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-weight-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 505
        echo "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-status\" class=\"col-sm-2 col-form-label\">";
        // line 509
        echo ($context["entry_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div class=\"form-check form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"status\" value=\"0\"/> <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 513
        if (($context["status"] ?? null)) {
            echo " checked";
        }
        echo "/>
                      </div>
                      ";
        // line 515
        if (($context["master_id"] ?? null)) {
            // line 516
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[status]\" value=\"1\" id=\"input-variant-status\" data-oc-toggle=\"switch\" data-oc-target=\"#input-status\" class=\"form-check-input\"";
            // line 518
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "status", [], "any", false, false, false, 518)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-status\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 522
        echo "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 526
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"sort_order\" value=\"";
        // line 529
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
                      ";
        // line 530
        if (($context["master_id"] ?? null)) {
            // line 531
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[sort_order]\" value=\"1\" id=\"input-variant-sort-order\" data-oc-toggle=\"switch\" data-oc-target=\"#input-sort-order\" class=\"form-check-input\"";
            // line 533
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "sort_order", [], "any", false, false, false, 533)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-sort-order\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 537
        echo "                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-links\" class=\"tab-pane\">
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 544
        echo ($context["entry_manufacturer"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 547
        echo ($context["manufacturer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_manufacturer"] ?? null);
        echo "\" id=\"input-manufacturer\" data-oc-target=\"autocomplete-manufacturer\" class=\"form-control\" autocomplete=\"off\"/>
                    ";
        // line 548
        if (($context["master_id"] ?? null)) {
            // line 549
            echo "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[manufacturer]\" value=\"1\" id=\"input-variant-manufacturer\" data-oc-toggle=\"switch\" data-oc-target=\"#input-manufacturer\" class=\"form-check-input\"";
            // line 551
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "manufacturer", [], "any", false, false, false, 551)) {
                echo " checked";
            }
            echo "/>
                          <label for=\"input-variant-manufacturer\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 556
        echo "                  </div>
                  <input type=\"hidden\" name=\"manufacturer_id\" value=\"";
        // line 557
        echo ($context["manufacturer_id"] ?? null);
        echo "\" id=\"input-manufacturer-id\"/>
                  <ul id=\"autocomplete-manufacturer\" class=\"dropdown-menu\"></ul>
                  <div class=\"form-text\">";
        // line 559
        echo ($context["help_manufacturer"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 563
        echo ($context["entry_category"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 565
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" data-oc-target=\"autocomplete-category\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-category\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-category\" class=\"table table-sm m-0\">
                        <tbody>
                          ";
        // line 571
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
            // line 572
            echo "                            <tr id=\"product-category-";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 572);
            echo "\">
                              <td>";
            // line 573
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "name", [], "any", false, false, false, 573);
            echo "<input type=\"hidden\" name=\"product_category[]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 573);
            echo "\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 577
        echo "                        </tbody>
                      </table>
                    </div>
                    ";
        // line 580
        if (($context["master_id"] ?? null)) {
            // line 581
            echo "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_category]\" value=\"1\" id=\"input-variant-category\" data-oc-toggle=\"switch\" data-oc-target=\"#input-category, #product-category\" class=\"form-check-input\"";
            // line 583
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_category", [], "any", false, false, false, 583)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-category\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 587
        echo "                  </div>
                  <div class=\"form-text\">";
        // line 588
        echo ($context["help_category"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 592
        echo ($context["entry_filter"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 594
        echo ($context["entry_filter"] ?? null);
        echo "\" id=\"input-filter\" data-oc-target=\"autocomplete-filter\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-filter\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-filter\" class=\"table table-sm m-0\">
                        <tbody>
                          ";
        // line 600
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 601
            echo "                            <tr id=\"product-filter-";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 601);
            echo "\">
                              <td>";
            // line 602
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "name", [], "any", false, false, false, 602);
            echo "<input type=\"hidden\" name=\"product_filter[]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 602);
            echo "\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 606
        echo "                        </tbody>
                      </table>
                    </div>
                    ";
        // line 609
        if (($context["master_id"] ?? null)) {
            // line 610
            echo "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_filter]\" value=\"1\" id=\"input-variant-filter\" data-oc-toggle=\"switch\" data-oc-target=\"#input-filter, #product-filter\" class=\"form-check-input\"";
            // line 612
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_filter", [], "any", false, false, false, 612)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-filter\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 616
        echo "                  </div>
                  <div class=\"form-text\">";
        // line 617
        echo ($context["help_filter"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 621
        echo ($context["entry_store"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <div id=\"product-store\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 625
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 626
            echo "                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"product_store[]\" value=\"";
            // line 627
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 627);
            echo "\" id=\"input-store-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 627);
            echo "\" class=\"form-check-input\"";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 627), ($context["product_store"] ?? null))) {
                echo " checked";
            }
            echo "/> <label for=\"input-store-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 627);
            echo "\" class=\"form-check-label\">";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 627);
            echo "</label>
                        </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 630
        echo "                    </div>
                    ";
        // line 631
        if (($context["master_id"] ?? null)) {
            // line 632
            echo "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_store]\" value=\"1\" id=\"input-variant-store\" data-oc-toggle=\"switch\" data-oc-target=\"#product-store\" class=\"form-check-input\"";
            // line 634
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_store", [], "any", false, false, false, 634)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-store\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 638
        echo "                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 642
        echo ($context["entry_download"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 644
        echo ($context["entry_download"] ?? null);
        echo "\" id=\"input-download\" data-oc-target=\"autocomplete-download\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-download\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-download\" class=\"table table-sm m-0\">
                        <tbody>
                          ";
        // line 650
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_downloads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 651
            echo "                            <tr id=\"product-download-";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 651);
            echo "\">
                              <td>";
            // line 652
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "name", [], "any", false, false, false, 652);
            echo "<input type=\"hidden\" name=\"product_download[]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 652);
            echo "\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_download'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 656
        echo "                        </tbody>
                      </table>
                    </div>
                    ";
        // line 659
        if (($context["master_id"] ?? null)) {
            // line 660
            echo "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_download]\" value=\"1\" id=\"input-variant-download\" data-oc-toggle=\"switch\" data-oc-target=\"#input-download, #product-download\" class=\"form-check-input\"";
            // line 662
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_download", [], "any", false, false, false, 662)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-download\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 666
        echo "                  </div>
                  <div class=\"form-text\">";
        // line 667
        echo ($context["help_download"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 671
        echo ($context["entry_related"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 673
        echo ($context["entry_related"] ?? null);
        echo "\" id=\"input-related\" data-oc-target=\"autocomplete-related\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-related\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-related\" class=\"table table-sm m-0\">
                        <tbody>
                          ";
        // line 679
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_relateds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 680
            echo "                            <tr id=\"product-related-";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 680);
            echo "\">
                              <td>";
            // line 681
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "name", [], "any", false, false, false, 681);
            echo "<input type=\"hidden\" name=\"product_related[]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 681);
            echo "\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 685
        echo "                        </tbody>
                      </table>
                    </div>
                    ";
        // line 688
        if (($context["master_id"] ?? null)) {
            // line 689
            echo "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_related]\" value=\"1\" id=\"input-variant-related\" data-oc-toggle=\"switch\" data-oc-target=\"#input-related, #product-related\" class=\"form-check-input\"";
            // line 691
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_related", [], "any", false, false, false, 691)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-related\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 695
        echo "                  </div>
                  <div class=\"form-text\">";
        // line 696
        echo ($context["help_related"] ?? null);
        echo "</div>
                </div>
              </div>
            </div>
            <div id=\"tab-attribute\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-attribute\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-start\">";
        // line 705
        echo ($context["entry_attribute"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 706
        echo ($context["entry_text"] ?? null);
        echo "</td>
                      <td>
                        ";
        // line 708
        if (($context["master_id"] ?? null)) {
            // line 709
            echo "                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_attribute]\" value=\"1\" id=\"input-variant-product-attribute\" data-oc-toggle=\"switch\" data-oc-target=\"#product-attribute\" class=\"form-check-input\"";
            // line 710
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_attribute", [], "any", false, false, false, 710)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-product-attribute\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 713
        echo "                      </td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 717
        $context["attribute_row"] = 0;
        // line 718
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_attributes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 719
            echo "                      <tr id=\"attribute-row-";
            echo ($context["attribute_row"] ?? null);
            echo "\">
                        <td class=\"text-start\">
                          <input type=\"text\" name=\"product_attribute[";
            // line 721
            echo ($context["attribute_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "name", [], "any", false, false, false, 721);
            echo "\" placeholder=\"";
            echo ($context["entry_attribute"] ?? null);
            echo "\" id=\"input-attribute-";
            echo ($context["attribute_row"] ?? null);
            echo "\" data-oc-target=\"autocomplete-attribute-";
            echo ($context["attribute_row"] ?? null);
            echo "\" class=\"form-control\" autocomplete=\"new-password\"/>
                          <input type=\"hidden\" name=\"product_attribute[";
            // line 722
            echo ($context["attribute_row"] ?? null);
            echo "][attribute_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "attribute_id", [], "any", false, false, false, 722);
            echo "\" id=\"input-attribute-id-";
            echo ($context["attribute_row"] ?? null);
            echo "\"/>
                          <ul id=\"autocomplete-attribute-";
            // line 723
            echo ($context["attribute_row"] ?? null);
            echo "\" class=\"dropdown-menu\"></ul>
                        </td>
                        <td class=\"text-start\">
                          ";
            // line 726
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 727
                echo "                            <div class=\"input-group mb-12\">
                              <div class=\"input-group-text\"><img src=\"";
                // line 728
                echo twig_get_attribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 728);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 728);
                echo "\"/></div>
                              <textarea name=\"product_attribute[";
                // line 729
                echo ($context["attribute_row"] ?? null);
                echo "][product_attribute_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 729);
                echo "][text]\" rows=\"5\" placeholder=\"";
                echo ($context["entry_text"] ?? null);
                echo "\" id=\"input-text-";
                echo ($context["attribute_row"] ?? null);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 729);
                echo "\" class=\"form-control\">";
                echo (((($__internal_compile_18 = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 729)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 729)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_19 = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 729)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 729)] ?? null) : null), "text", [], "any", false, false, false, 729)) : (""));
                echo "</textarea>
                            </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 731
            echo "</td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#attribute-row-";
            // line 732
            echo ($context["attribute_row"] ?? null);
            echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 734
            $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
            // line 735
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 736
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-attribute\" data-bs-toggle=\"tooltip\" title=\"";
        // line 740
        echo ($context["button_attribute_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            ";
        // line 746
        if ( !($context["master_id"] ?? null)) {
            // line 747
            echo "              <div id=\"tab-option\" class=\"tab-pane\">

                <div id=\"option\">
                  ";
            // line 750
            $context["option_row"] = 0;
            // line 751
            echo "                  ";
            $context["option_value_row"] = 0;
            // line 752
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
                // line 753
                echo "
                    <fieldset id=\"option-row-";
                // line 754
                echo ($context["option_row"] ?? null);
                echo "\">
                      <legend class=\"float-none\">";
                // line 755
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 755);
                echo " <button type=\"button\" class=\"btn btn-danger btn-sm float-end\" onclick=\"\$('#option-row-";
                echo ($context["option_row"] ?? null);
                echo "').remove();\"><i class=\"fa-solid fa-minus-circle\"></i></button></legend>
                      <input type=\"hidden\" name=\"product_option[";
                // line 756
                echo ($context["option_row"] ?? null);
                echo "][product_option_id]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_id", [], "any", false, false, false, 756);
                echo "\"/> <input type=\"hidden\" name=\"product_option[";
                echo ($context["option_row"] ?? null);
                echo "][name]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 756);
                echo "\"/> <input type=\"hidden\" name=\"product_option[";
                echo ($context["option_row"] ?? null);
                echo "][option_id]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 756);
                echo "\"/> <input type=\"hidden\" name=\"product_option[";
                echo ($context["option_row"] ?? null);
                echo "][type]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 756);
                echo "\"/>

                      <div class=\"row mb-3\">
                        <label for=\"input-required-";
                // line 759
                echo ($context["option_row"] ?? null);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo ($context["entry_required"] ?? null);
                echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"product_option[";
                // line 761
                echo ($context["option_row"] ?? null);
                echo "][required]\" id=\"input-required-";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-select\">
                            <option value=\"1\"";
                // line 762
                if (twig_get_attribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 762)) {
                    echo " selected";
                }
                echo ">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
                            <option value=\"0\"";
                // line 763
                if ( !twig_get_attribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 763)) {
                    echo " selected";
                }
                echo ">";
                echo ($context["text_disabled"] ?? null);
                echo "</option>
                          </select>
                        </div>
                      </div>

                      ";
                // line 768
                if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 768) == "text")) {
                    // line 769
                    echo "                        <div class=\"row mb-3\">
                          <label for=\"input-option-";
                    // line 770
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"product_option[";
                    // line 772
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 772);
                    echo "\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" id=\"input-option-";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control\"/>
                          </div>
                        </div>
                      ";
                }
                // line 776
                echo "
                      ";
                // line 777
                if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 777) == "textarea")) {
                    // line 778
                    echo "                        <div class=\"row mb-3\">
                          <label for=\"input-option-";
                    // line 779
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <textarea name=\"product_option[";
                    // line 781
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" rows=\"5\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" id=\"input-option-";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 781);
                    echo "</textarea>
                          </div>
                        </div>
                      ";
                }
                // line 785
                echo "
                      ";
                // line 786
                if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 786) == "file")) {
                    // line 787
                    echo "                        <div class=\"row mb-3 d-none\">
                          <label for=\"input-option-";
                    // line 788
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[";
                    // line 789
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 789);
                    echo "\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" id=\"input-option-";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control\"/></div>
                        </div>
                      ";
                }
                // line 792
                echo "
                      ";
                // line 793
                if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 793) == "date")) {
                    // line 794
                    echo "                        <div class=\"row mb-3\">
                          <label for=\"input-option-";
                    // line 795
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10 col-md-4\">
                            <div class=\"input-group\">
                              <input type=\"text\" name=\"product_option[";
                    // line 798
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 798);
                    echo "\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" id=\"input-option-";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control date\"/>
                              <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                            </div>
                          </div>
                        </div>
                      ";
                }
                // line 804
                echo "
                      ";
                // line 805
                if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 805) == "time")) {
                    // line 806
                    echo "                        <div class=\"row mb-3\">
                          <label for=\"input-option-";
                    // line 807
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10 col-md-4\">
                            <div class=\"input-group\">
                              <input type=\"text\" name=\"product_option[";
                    // line 810
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 810);
                    echo "\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" id=\"input-option-";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control time\"/>
                              <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                            </div>
                          </div>
                        </div>
                      ";
                }
                // line 816
                echo "
                      ";
                // line 817
                if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 817) == "datetime")) {
                    // line 818
                    echo "                        <div class=\"row mb-3\">
                          <label for=\"input-option-";
                    // line 819
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10 col-md-4\">
                            <div class=\"input-group\">
                              <input type=\"text\" name=\"product_option[";
                    // line 822
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 822);
                    echo "\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" id=\"input-option-";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control datetime\"/>
                              <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                            </div>
                          </div>
                        </div>
                      ";
                }
                // line 828
                echo "
                      ";
                // line 829
                if (((((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 829) == "select") || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 829) == "radio")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 829) == "checkbox")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 829) == "image"))) {
                    // line 830
                    echo "                        <div class=\"table-responsive\">
                          <table class=\"table table-bordered table-hover\">
                            <thead>
                              <tr>
                                <td class=\"text-start\">";
                    // line 834
                    echo ($context["entry_option_value"] ?? null);
                    echo "</td>
                                <td class=\"text-end\">";
                    // line 835
                    echo ($context["entry_quantity"] ?? null);
                    echo "</td>
                                <td class=\"text-start\">";
                    // line 836
                    echo ($context["entry_subtract"] ?? null);
                    echo "</td>
                                <td class=\"text-end\">";
                    // line 837
                    echo ($context["entry_price"] ?? null);
                    echo "</td>
                                <td class=\"text-end\">";
                    // line 838
                    echo ($context["entry_points"] ?? null);
                    echo "</td>
                                <td class=\"text-end\">";
                    // line 839
                    echo ($context["entry_weight"] ?? null);
                    echo "</td>
                                <td></td>
                              </tr>
                            </thead>
                            <tbody id=\"option-value-";
                    // line 843
                    echo ($context["option_row"] ?? null);
                    echo "\">
                              ";
                    // line 844
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_value", [], "any", false, false, false, 844));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                        // line 845
                        echo "                                <tr id=\"option-value-row-";
                        echo ($context["option_value_row"] ?? null);
                        echo "\">
                                  <td class=\"text-start\">";
                        // line 846
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "name", [], "any", false, false, false, 846);
                        echo "
                                    <input type=\"hidden\" name=\"product_option[";
                        // line 847
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][option_value_id]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "option_value_id", [], "any", false, false, false, 847);
                        echo "\"/> <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][product_option_value_id]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "product_option_value_id", [], "any", false, false, false, 847);
                        echo "\"/></td>
                                  <td class=\"text-end\">";
                        // line 848
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 848);
                        echo " <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][quantity]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 848);
                        echo "\"/></td>
                                  <td class=\"text-start\">";
                        // line 849
                        if (twig_get_attribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 849)) {
                            // line 850
                            echo "                                      ";
                            echo ($context["text_yes"] ?? null);
                            echo "
                                    ";
                        } else {
                            // line 852
                            echo "                                      ";
                            echo ($context["text_no"] ?? null);
                            echo "
                                    ";
                        }
                        // line 854
                        echo "                                    <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][subtract]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 854);
                        echo "\"/></td>
                                  <td class=\"text-end\">";
                        // line 855
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 855);
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 855);
                        echo "
                                    <input type=\"hidden\" name=\"product_option[";
                        // line 856
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][price_prefix]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 856);
                        echo "\"/> <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][price]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 856);
                        echo "\"/></td>
                                  <td class=\"text-end\">";
                        // line 857
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 857);
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 857);
                        echo "
                                    <input type=\"hidden\" name=\"product_option[";
                        // line 858
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][points_prefix]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 858);
                        echo "\"/> <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][points]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 858);
                        echo "\"/></td>
                                  <td class=\"text-end\">";
                        // line 859
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 859);
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 859);
                        echo "
                                    <input type=\"hidden\" name=\"product_option[";
                        // line 860
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][weight_prefix]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 860);
                        echo "\"/> <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][weight]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 860);
                        echo "\"/></td>
                                  <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                        // line 861
                        echo ($context["button_edit"] ?? null);
                        echo "\" data-option-row=\"";
                        echo ($context["option_row"] ?? null);
                        echo "\" data-option-value-row=\"";
                        echo ($context["option_value_row"] ?? null);
                        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></button> <button type=\"button\" onclick=\"\$('#option-value-row-";
                        echo ($context["option_value_row"] ?? null);
                        echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
                        echo ($context["button_remove"] ?? null);
                        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                                </tr>
                                ";
                        // line 863
                        $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                        // line 864
                        echo "                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 865
                    echo "                            </tbody>
                            <tfoot>
                              <tr>
                                <td colspan=\"6\"></td>
                                <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 869
                    echo ($context["button_option_value_add"] ?? null);
                    echo "\" data-option-row=\"";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                              </tr>
                            </tfoot>
                          </table>
                          <select id=\"product-option-values-";
                    // line 873
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"d-none\">
                            ";
                    // line 874
                    if ((($__internal_compile_20 = ($context["option_values"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 874)] ?? null) : null)) {
                        // line 875
                        echo "                              ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_compile_21 = ($context["option_values"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 875)] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 876
                            echo "                                <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 876);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 876);
                            echo "</option>
                              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 878
                        echo "                            ";
                    }
                    // line 879
                    echo "                          </select>
                        </div>
                      ";
                }
                // line 882
                echo "                    </fieldset>

                    ";
                // line 884
                $context["option_row"] = (($context["option_row"] ?? null) + 1);
                // line 885
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 886
            echo "                </div>

                <fieldset>
                  <legend class=\"float-none\">";
            // line 889
            echo ($context["text_option_add"] ?? null);
            echo "</legend>
                  <div class=\"row mb-3\">
                    <label for=\"input-option\" class=\"col-sm-2 col-form-label\">";
            // line 891
            echo ($context["entry_option"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
            // line 893
            echo ($context["entry_option"] ?? null);
            echo "\" id=\"input-option\" data-oc-target=\"autocomplete-option\" class=\"form-control\" autocomplete=\"off\"/>
                      <ul id=\"autocomplete-option\" class=\"dropdown-menu\"></ul>
                      <div class=\"form-text\">";
            // line 895
            echo ($context["help_option"] ?? null);
            echo "</div>
                    </div>
                  </div>
                </fieldset>
              </div>

            ";
        } else {
            // line 902
            echo "
              <div id=\"tab-option\" class=\"tab-pane\">
                ";
            // line 904
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 905
                echo "                  <fieldset>
                    <legend class=\"float-none\">";
                // line 906
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 906);
                echo "</legend>

                    ";
                // line 908
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 908) == "select")) {
                    // line 909
                    echo "                      <div class=\"row mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 909)) {
                        echo " required";
                    }
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 910
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 910);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <select name=\"variant[";
                    // line 913
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 913);
                    echo "]\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 913);
                    echo "\" class=\"form-select\">
                              <option value=\"\">";
                    // line 914
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                              ";
                    // line 915
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 915));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 916
                        echo "                                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 916);
                        echo "\"";
                        if (((($__internal_compile_22 = ($context["variant"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 916)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 916) == (($__internal_compile_23 = ($context["variant"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 916)] ?? null) : null)))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 916);
                        echo "
                                  ";
                        // line 917
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 917)) {
                            // line 918
                            echo "                                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 918);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 918);
                            echo ")
                                  ";
                        }
                        // line 919
                        echo "</option>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 921
                    echo "                            </select>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 924
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 924);
                    echo "]\" value=\"1\" id=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 924);
                    echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 924);
                    echo "\" class=\"form-check-input\"";
                    if ((($__internal_compile_24 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 924)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 924)] ?? null) : null)) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 924);
                    echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 928
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 928);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 932
                echo "
                    ";
                // line 933
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 933) == "radio")) {
                    // line 934
                    echo "                      <div class=\"row mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 934)) {
                        echo " required";
                    }
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 935
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 935);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div id=\"input-option-";
                    // line 938
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 938);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              ";
                    // line 939
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 939));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 940
                        echo "                                <div class=\"form-check\">
                                  <input type=\"radio\" name=\"variant[";
                        // line 941
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 941);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 941);
                        echo "\" id=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 941);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_25 = ($context["variant"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 941)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 941) == (($__internal_compile_26 = ($context["variant"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 941)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 941);
                        echo "\" class=\"form-check-label\">
                                    ";
                        // line 942
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 942)) {
                            echo "<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 942);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 942);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 942)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 942);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 942);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>";
                        }
                        // line 943
                        echo "                                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 943);
                        echo "
                                    ";
                        // line 944
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 944)) {
                            // line 945
                            echo "                                      (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 945);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 945);
                            echo ")
                                    ";
                        }
                        // line 947
                        echo "                                  </label>
                                </div>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 950
                    echo "                            </div>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 953
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 953);
                    echo "]\" value=\"1\" id=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 953);
                    echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 953);
                    echo "\" class=\"form-check-input\"";
                    if ((($__internal_compile_27 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 953)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 953)] ?? null) : null)) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 953);
                    echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 957
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 957);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 961
                echo "
                    ";
                // line 962
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 962) == "checkbox")) {
                    // line 963
                    echo "                      <div class=\"row mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 963)) {
                        echo " required";
                    }
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 964
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 964);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div id=\"input-option-";
                    // line 967
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 967);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              ";
                    // line 968
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 968));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 969
                        echo "                                <div class=\"form-check\">
                                  <input type=\"checkbox\" name=\"variant[";
                        // line 970
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 970);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 970);
                        echo "\" id=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 970);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_28 = ($context["variant"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 970)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 970), (($__internal_compile_29 = ($context["variant"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 970)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 970);
                        echo "\" class=\"form-check-label\">";
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 970)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 970);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 970);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 970)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 970);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 970);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>";
                        }
                        // line 971
                        echo "                                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 971);
                        echo "
                                    ";
                        // line 972
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 972)) {
                            // line 973
                            echo "                                      (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 973);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 973);
                            echo ")
                                    ";
                        }
                        // line 975
                        echo "                                  </label>
                                </div>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 978
                    echo "                            </div>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 981
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 981);
                    echo "]\" value=\"1\" id=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 981);
                    echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 981);
                    echo "\" class=\"form-check-input\"";
                    if ((($__internal_compile_30 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 981)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 981)] ?? null) : null)) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 981);
                    echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 985
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 985);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 989
                echo "
                    ";
                // line 990
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 990) == "text")) {
                    // line 991
                    echo "                      <div class=\"row mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 991)) {
                        echo " required";
                    }
                    echo "\">
                        <label for=\"input-option-";
                    // line 992
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 992);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 992);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"variant[";
                    // line 995
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 995);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_31 = ($context["variant"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 995)] ?? null) : null)) ? ((($__internal_compile_32 = ($context["variant"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 995)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 995)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 995);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 995);
                    echo "\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 998
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 998);
                    echo "]\" value=\"1\" id=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 998);
                    echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 998);
                    echo "\" class=\"form-check-input\"";
                    if ((($__internal_compile_33 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 998)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 998)] ?? null) : null)) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 998);
                    echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1002
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1002);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1006
                echo "
                    ";
                // line 1007
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1007) == "textarea")) {
                    // line 1008
                    echo "                      <div class=\"row mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1008)) {
                        echo " required";
                    }
                    echo "\">
                        <label for=\"input-option-";
                    // line 1009
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1009);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1009);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <textarea name=\"variant[";
                    // line 1012
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1012);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1012);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1012);
                    echo "\" class=\"form-control\">";
                    echo (((($__internal_compile_34 = ($context["variant"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1012)] ?? null) : null)) ? ((($__internal_compile_35 = ($context["variant"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1012)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1012)));
                    echo "</textarea>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1015
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1015);
                    echo "]\" value=\"1\" id=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1015);
                    echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1015);
                    echo "\" class=\"form-check-input\"";
                    if ((($__internal_compile_36 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1015)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1015)] ?? null) : null)) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1015);
                    echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1019
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1019);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1023
                echo "
                    ";
                // line 1024
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1024) == "file")) {
                    // line 1025
                    echo "                      <div class=\"row mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1025)) {
                        echo " required";
                    }
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 1026
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1026);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 1029
                    echo ($context["upload"] ?? null);
                    echo "\" id=\"button-upload-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1029);
                    echo "\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1029);
                    echo "\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                            <input type=\"text\" name=\"variant[";
                    // line 1030
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1030);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_37 = ($context["variant"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1030)] ?? null) : null)) ? ((($__internal_compile_38 = ($context["variant"] ?? null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1030)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1030)));
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1030);
                    echo "\" class=\"form-control\"/>
                            <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-option-";
                    // line 1031
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1031);
                    echo "\"";
                    if ( !(($__internal_compile_39 = ($context["variant"] ?? null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1031)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> ";
                    echo ($context["button_download"] ?? null);
                    echo "</button>
                            <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 1032
                    echo ($context["button_clear"] ?? null);
                    echo "\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1032);
                    echo "\"";
                    if ( !(($__internal_compile_40 = ($context["variant"] ?? null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1032)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1035
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1035);
                    echo "]\" value=\"1\" id=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1035);
                    echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#button-upload-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1035);
                    echo "\" class=\"form-check-input\"";
                    if ((($__internal_compile_41 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1035)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1035)] ?? null) : null)) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1035);
                    echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1039
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1039);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1043
                echo "
                    ";
                // line 1044
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1044) == "date")) {
                    // line 1045
                    echo "                      <div class=\"row mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1045)) {
                        echo " required";
                    }
                    echo "\">
                        <label for=\"input-option-";
                    // line 1046
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1046);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1046);
                    echo "</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"variant[";
                    // line 1049
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1049);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_42 = ($context["variant"] ?? null)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1049)] ?? null) : null)) ? ((($__internal_compile_43 = ($context["variant"] ?? null)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1049)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1049)));
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1049);
                    echo "\" class=\"form-control date\"/>
                            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1053
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1053);
                    echo "]\" value=\"1\" id=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1053);
                    echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1053);
                    echo "\" class=\"form-check-input\"";
                    if ((($__internal_compile_44 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1053)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1053)] ?? null) : null)) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1053);
                    echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1057
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1057);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1061
                echo "
                    ";
                // line 1062
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1062) == "time")) {
                    // line 1063
                    echo "                      <div class=\"row mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1063)) {
                        echo " required";
                    }
                    echo "\">
                        <label for=\"input-option-";
                    // line 1064
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1064);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1064);
                    echo "</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div id=\"input-option-";
                    // line 1066
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1066);
                    echo "\" class=\"input-group\">
                            <input type=\"text\" name=\"variant[";
                    // line 1067
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1067);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_45 = ($context["variant"] ?? null)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1067)] ?? null) : null)) ? ((($__internal_compile_46 = ($context["variant"] ?? null)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1067)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1067)));
                    echo "\" class=\"form-control time\"/>
                            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1071
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1071);
                    echo "]\" value=\"1\" id=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1071);
                    echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1071);
                    echo "\" class=\"form-check-input\"";
                    if ((($__internal_compile_47 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1071)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1071)] ?? null) : null)) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1071);
                    echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1075
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1075);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1079
                echo "
                    ";
                // line 1080
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1080) == "datetime")) {
                    // line 1081
                    echo "                      <div class=\"row mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1081)) {
                        echo " required";
                    }
                    echo "\">
                        <label for=\"input-option-";
                    // line 1082
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1082);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1082);
                    echo "</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"variant[";
                    // line 1085
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1085);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_48 = ($context["variant"] ?? null)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1085)] ?? null) : null)) ? ((($__internal_compile_49 = ($context["variant"] ?? null)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1085)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1085)));
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1085);
                    echo "\" class=\"form-control datetime\"/>
                            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1089
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1089);
                    echo "]\" value=\"1\" id=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1089);
                    echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1089);
                    echo "\" class=\"form-check-input\"";
                    if ((($__internal_compile_50 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1089)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1089)] ?? null) : null)) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1089);
                    echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1093
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1093);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1097
                echo "
                  </fieldset>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1100
            echo "              </div>
            ";
        }
        // line 1102
        echo "
            <div id=\"tab-subscription\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-subscription\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-start\">";
        // line 1108
        echo ($context["entry_subscription"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 1109
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 1110
        echo ($context["entry_trial_price"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 1111
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td>
                        ";
        // line 1113
        if (($context["master_id"] ?? null)) {
            // line 1114
            echo "                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_subscription]\" value=\"1\" id=\"input-variant-product-subscription\" data-oc-toggle=\"switch\" data-oc-target=\"#product-subscription\" class=\"form-check-input\"";
            // line 1115
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_subscription", [], "any", false, false, false, 1115)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-product-subscription\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 1118
        echo "                      </td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1122
        $context["subscription_row"] = 0;
        // line 1123
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_subscriptions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_subscription"]) {
            // line 1124
            echo "                      <tr id=\"subscription-row-";
            echo ($context["subscription_row"] ?? null);
            echo "\">
                        <td class=\"text-start\"><select name=\"product_subscription[";
            // line 1125
            echo ($context["subscription_row"] ?? null);
            echo "][subscription_plan_id]\" class=\"form-select\">
                            ";
            // line 1126
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 1127
                echo "                              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 1127);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 1127) == twig_get_attribute($this->env, $this->source, $context["product_subscription"], "subscription_plan_id", [], "any", false, false, false, 1127))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 1127);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_plan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1129
            echo "                          </select></td>
                        <td class=\"text-start\"><select name=\"product_subscription[";
            // line 1130
            echo ($context["subscription_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-select\">
                            ";
            // line 1131
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1132
                echo "                              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1132);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1132) == twig_get_attribute($this->env, $this->source, $context["product_subscription"], "customer_group_id", [], "any", false, false, false, 1132))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1132);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1134
            echo "                          </select></td>
                        <td class=\"text-start\"><input type=\"text\" name=\"product_subscription[";
            // line 1135
            echo ($context["subscription_row"] ?? null);
            echo "][trial_price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_subscription"], "trial_price", [], "any", false, false, false, 1135);
            echo "\" placeholder=\"";
            echo ($context["entry_trial_price"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-start\"><input type=\"text\" name=\"product_subscription[";
            // line 1136
            echo ($context["subscription_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_subscription"], "price", [], "any", false, false, false, 1136);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#subscription-row-";
            // line 1137
            echo ($context["subscription_row"] ?? null);
            echo "').remove()\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1139
            $context["subscription_row"] = (($context["subscription_row"] ?? null) + 1);
            // line 1140
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_subscription'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1141
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"4\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-subscription\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1145
        echo ($context["button_subscription_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

            <div id=\"tab-discount\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-discount\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-start\">";
        // line 1157
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-end\">";
        // line 1158
        echo ($context["entry_quantity"] ?? null);
        echo "</td>
                      <td class=\"text-end\">";
        // line 1159
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-end\">";
        // line 1160
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 1161
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 1162
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td class=\"text-end\">";
        // line 1163
        if (($context["master_id"] ?? null)) {
            // line 1164
            echo "                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[product_discount]\" value=\"1\" id=\"input-variant-product-discount\" data-oc-toggle=\"switch\" data-oc-target=\"#product-discount\" class=\"form-check-input\"";
            // line 1165
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_discount", [], "any", false, false, false, 1165)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-product-discount\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 1167
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1171
        $context["discount_row"] = 0;
        // line 1172
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 1173
            echo "                      <tr id=\"discount-row-";
            echo ($context["discount_row"] ?? null);
            echo "\">
                        <td class=\"text-start\"><select name=\"product_discount[";
            // line 1174
            echo ($context["discount_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-select\">
                            ";
            // line 1175
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1176
                echo "                              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1176);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1176) == twig_get_attribute($this->env, $this->source, $context["product_discount"], "customer_group_id", [], "any", false, false, false, 1176))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1176);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1178
            echo "                          </select></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[";
            // line 1179
            echo ($context["discount_row"] ?? null);
            echo "][quantity]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "quantity", [], "any", false, false, false, 1179);
            echo "\" placeholder=\"";
            echo ($context["entry_quantity"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[";
            // line 1180
            echo ($context["discount_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "priority", [], "any", false, false, false, 1180);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[";
            // line 1181
            echo ($context["discount_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "price", [], "any", false, false, false, 1181);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-start\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"product_discount[";
            // line 1184
            echo ($context["discount_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_start", [], "any", false, false, false, 1184);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" class=\"form-control date\"/>
                            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                          </div>
                        </td>
                        <td class=\"text-start\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"product_discount[";
            // line 1190
            echo ($context["discount_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_end", [], "any", false, false, false, 1190);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" class=\"form-control date\"/>
                            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                          </div>
                        </td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#discount-row-";
            // line 1194
            echo ($context["discount_row"] ?? null);
            echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1196
            $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
            // line 1197
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1198
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"6\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-discount\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1202
        echo ($context["button_discount_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

            <div id=\"tab-special\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-special\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-start\">";
        // line 1214
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-end\">";
        // line 1215
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-end\">";
        // line 1216
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 1217
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 1218
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td class=\"text-center\">";
        // line 1219
        if (($context["master_id"] ?? null)) {
            // line 1220
            echo "                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[product_special]\" value=\"1\" id=\"input-variant-special\" data-oc-toggle=\"switch\" data-oc-target=\"#product-special\" class=\"form-check-input\"";
            // line 1221
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_special", [], "any", false, false, false, 1221)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-special\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 1223
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1227
        $context["special_row"] = 0;
        // line 1228
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_specials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 1229
            echo "                      <tr id=\"special-row-";
            echo ($context["special_row"] ?? null);
            echo "\">
                        <td class=\"text-start\"><select name=\"product_special[";
            // line 1230
            echo ($context["special_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-select\">
                            ";
            // line 1231
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1232
                echo "                              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1232);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1232) == twig_get_attribute($this->env, $this->source, $context["product_special"], "customer_group_id", [], "any", false, false, false, 1232))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1232);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1234
            echo "                          </select></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_special[";
            // line 1235
            echo ($context["special_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "priority", [], "any", false, false, false, 1235);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_special[";
            // line 1236
            echo ($context["special_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "price", [], "any", false, false, false, 1236);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-start\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"product_special[";
            // line 1239
            echo ($context["special_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_start", [], "any", false, false, false, 1239);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" class=\"form-control date\"/>
                            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                          </div>
                        </td>
                        <td class=\"text-start\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"product_special[";
            // line 1245
            echo ($context["special_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_end", [], "any", false, false, false, 1245);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" class=\"form-control date\"/>
                            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                          </div>
                        </td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#special-row-";
            // line 1249
            echo ($context["special_row"] ?? null);
            echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1251
            $context["special_row"] = (($context["special_row"] ?? null) + 1);
            // line 1252
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1253
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"5\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-special\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1257
        echo ($context["button_special_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

            <div id=\"tab-image\" class=\"tab-pane\">

              <fieldset>
                <legend>";
        // line 1267
        echo ($context["text_image"] ?? null);
        echo "</legend>
                <div class=\"row\">
                  <div class=\"col-sm-4 col-md-3 mb-3\">
                    <div id=\"image\" class=\"card image\">
                      <img src=\"";
        // line 1271
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"image\" value=\"";
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\"/>
                      <div class=\"card-body\">
                        <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 1273
        echo ($context["button_edit"] ?? null);
        echo "</button>
                        <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 1274
        echo ($context["button_clear"] ?? null);
        echo "</button>

                        ";
        // line 1276
        if (($context["master_id"] ?? null)) {
            // line 1277
            echo "                          <div class=\"mx-auto w-25\">
                            <div class=\"form-check form-switch\">
                              <input type=\"checkbox\" name=\"override[image]\" value=\"1\" id=\"input-variant-image\" data-oc-toggle=\"switch\" data-oc-target=\"#image\" class=\"form-check-input\"";
            // line 1279
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "image", [], "any", false, false, false, 1279)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-image\" class=\"form-check-label\"></label>
                            </div>
                          </div>
                        ";
        }
        // line 1283
        echo "
                      </div>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend>";
        // line 1291
        echo ($context["text_image_additional"] ?? null);
        echo "</legend>
                <div class=\"table-responsive\">
                  <table id=\"product-image\" class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-start\">";
        // line 1296
        echo ($context["entry_image"] ?? null);
        echo "</td>
                        <td class=\"text-start\">";
        // line 1297
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
                        <td class=\"text-end\">

                          ";
        // line 1300
        if (($context["master_id"] ?? null)) {
            // line 1301
            echo "                            <div class=\"form-check form-switch\">
                              <input type=\"checkbox\" name=\"override[product_image]\" value=\"1\" id=\"input-variant-product-image\" data-oc-toggle=\"switch\" data-oc-target=\"#product-image\" class=\"form-check-input\"";
            // line 1302
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_image", [], "any", false, false, false, 1302)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-product-image\" class=\"form-check-label\"></label>
                            </div>
                          ";
        }
        // line 1305
        echo "
                        </td>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 1310
        $context["image_row"] = 0;
        // line 1311
        echo "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 1312
            echo "                        <tr id=\"product-image-row-";
            echo ($context["image_row"] ?? null);
            echo "\">
                          <td>
                            <div class=\"card image\">
                              <img src=\"";
            // line 1315
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "thumb", [], "any", false, false, false, 1315);
            echo "\" alt=\"\" title=\"\" id=\"product-image-";
            echo ($context["image_row"] ?? null);
            echo "\" data-oc-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"product_image[";
            echo ($context["image_row"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "image", [], "any", false, false, false, 1315);
            echo "\" id=\"input-product-image-";
            echo ($context["image_row"] ?? null);
            echo "\"/>
                              <div class=\"card-body\">
                                <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-product-image-";
            // line 1317
            echo ($context["image_row"] ?? null);
            echo "\" data-oc-thumb=\"#product-image-";
            echo ($context["image_row"] ?? null);
            echo "\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
            echo ($context["button_edit"] ?? null);
            echo "</button>
                                <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-product-image-";
            // line 1318
            echo ($context["image_row"] ?? null);
            echo "\" data-oc-thumb=\"#product-image-";
            echo ($context["image_row"] ?? null);
            echo "\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
            echo ($context["button_clear"] ?? null);
            echo "</button>
                              </div>
                            </div>
                          </td>
                          <td class=\"text-start\"><input type=\"text\" name=\"product_image[";
            // line 1322
            echo ($context["image_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "sort_order", [], "any", false, false, false, 1322);
            echo "\" placeholder=\"";
            echo ($context["entry_sort_order"] ?? null);
            echo "\" class=\"form-control\"/></td>
                          <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#product-image-row-";
            // line 1323
            echo ($context["image_row"] ?? null);
            echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                        </tr>
                        ";
            // line 1325
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 1326
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1327
        echo "                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan=\"2\"></td>
                        <td class=\"text-end\"><button type=\"button\" id=\"button-image\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1331
        echo ($context["button_image_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </fieldset>
            </div>

            <div id=\"tab-reward\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1341
        echo ($context["text_reward"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-points\" class=\"col-sm-2 col-form-label\">";
        // line 1343
        echo ($context["entry_points"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"points\" value=\"";
        // line 1346
        echo ($context["points"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_points"] ?? null);
        echo "\" id=\"input-points\" class=\"form-control\"/>
                      ";
        // line 1347
        if (($context["master_id"] ?? null)) {
            // line 1348
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[points]\" value=\"1\" id=\"input-variant-points\" data-oc-toggle=\"switch\" data-oc-target=\"#input-points\" class=\"form-check-input\"";
            // line 1350
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "points", [], "any", false, false, false, 1350)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-points\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 1354
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 1355
        echo ($context["help_points"] ?? null);
        echo "</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1360
        echo ($context["text_points"] ?? null);
        echo "</legend>
                <div class=\"table-responsive\">
                  <table id=\"product-reward\" class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-start\">";
        // line 1365
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                        <td class=\"text-end\">";
        // line 1366
        echo ($context["entry_reward"] ?? null);
        echo "&nbsp;&nbsp;
                          ";
        // line 1367
        if (($context["master_id"] ?? null)) {
            // line 1368
            echo "                            <div class=\"form-check form-switch float-end\">
                              <input type=\"checkbox\" name=\"override[product_reward]\" value=\"1\" id=\"input-variant-product-reward\" data-oc-toggle=\"switch\" data-oc-target=\"#product-reward\" class=\"form-check-input\"";
            // line 1369
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_reward", [], "any", false, false, false, 1369)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-product-reward\" class=\"form-check-label\"></label>
                            </div>
                          ";
        }
        // line 1372
        echo "                        </td>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 1376
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1377
            echo "                        <tr>
                          <td class=\"text-start\">";
            // line 1378
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1378);
            echo "</td>
                          <td class=\"text-end\"><input type=\"text\" name=\"product_reward[";
            // line 1379
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1379);
            echo "][points]\" value=\"";
            echo (((($__internal_compile_51 = ($context["product_reward"] ?? null)) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1379)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_52 = ($context["product_reward"] ?? null)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1379)] ?? null) : null), "points", [], "any", false, false, false, 1379)) : (""));
            echo "\" class=\"form-control\"/></td>
                        </tr>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1382
        echo "                    </tbody>
                  </table>
                </div>
              </fieldset>
            </div>

            <div id=\"tab-seo\" class=\"tab-pane\">
              <div class=\"alert alert-info\"><i class=\"fa-solid fa-info-circle\"></i> ";
        // line 1389
        echo ($context["text_keyword"] ?? null);
        echo "</div>
              <div id=\"product-seo\" class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-start\">";
        // line 1394
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 1395
        echo ($context["entry_keyword"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1399
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1400
            echo "                      <tr>
                        <td class=\"text-start\">";
            // line 1401
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1401);
            echo "</td>
                        <td class=\"text-start\">
                          ";
            // line 1403
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1404
                echo "                            <div class=\"input-group\">
                              <div class=\"input-group-text\"><img src=\"";
                // line 1405
                echo twig_get_attribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 1405);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1405);
                echo "\"/></div>
                              <input type=\"text\" name=\"product_seo_url[";
                // line 1406
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1406);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1406);
                echo "]\" value=\"";
                if ((($__internal_compile_53 = (($__internal_compile_54 = ($context["product_seo_url"] ?? null)) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1406)] ?? null) : null)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1406)] ?? null) : null)) {
                    echo (($__internal_compile_55 = (($__internal_compile_56 = ($context["product_seo_url"] ?? null)) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1406)] ?? null) : null)) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1406)] ?? null) : null);
                }
                echo "\" id=\"input-keyword-";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1406);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1406);
                echo "\" placeholder=\"";
                echo ($context["entry_keyword"] ?? null);
                echo "\" class=\"form-control\"/>
                            </div>
                            <div id=\"error-keyword-";
                // line 1408
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1408);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1408);
                echo "\" class=\"invalid-feedback\"></div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1409
            echo "</td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1412
        echo "                  </tbody>
                </table>
              </div>
            </div>
            <div id=\"tab-design\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-layout\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-start\">";
        // line 1421
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 1422
        echo ($context["entry_layout"] ?? null);
        echo "
                        ";
        // line 1423
        if (($context["master_id"] ?? null)) {
            // line 1424
            echo "                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_layout]\" value=\"1\" id=\"input-variant-product-layout\" data-oc-toggle=\"switch\" data-oc-target=\"#product-layout\" class=\"form-check-input\"";
            // line 1425
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_layout", [], "any", false, false, false, 1425)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-product-layout\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 1428
        echo "                      </td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1432
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1433
            echo "                      <tr>
                        <td class=\"text-start\">";
            // line 1434
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1434);
            echo "</td>
                        <td class=\"text-start\"><select name=\"product_layout[";
            // line 1435
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1435);
            echo "]\" class=\"form-select\">
                            <option value=\"\"></option>
                            ";
            // line 1437
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 1438
                echo "                              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1438);
                echo "\"";
                if (((($__internal_compile_57 = ($context["product_layout"] ?? null)) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1438)] ?? null) : null) && ((($__internal_compile_58 = ($context["product_layout"] ?? null)) && is_array($__internal_compile_58) || $__internal_compile_58 instanceof ArrayAccess ? ($__internal_compile_58[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1438)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1438)))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1438);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1440
            echo "                          </select></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1443
        echo "                  </tbody>
                </table>

              </div>
            </div>
            <div id=\"tab-report\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1450
        echo ($context["text_report"] ?? null);
        echo "</legend>
                <div id=\"report\">";
        // line 1451
        echo ($context["report"] ?? null);
        echo "</div>
              </fieldset>
            </div>
          </div>
          <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 1455
        echo ($context["product_id"] ?? null);
        echo "\" id=\"input-product-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('textarea[data-oc-toggle=\\'ckeditor\\']').ckeditor({
    language: '";
        // line 1463
        echo ($context["ckeditor"] ?? null);
        echo "'
});

// Manufacturer
\$('#input-manufacturer').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/manufacturer.autocomplete&user_token=";
        // line 1470
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                json.unshift({
                    manufacturer_id: 0,
                    name: '";
        // line 1475
        echo ($context["text_none"] ?? null);
        echo "'
                });

                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['manufacturer_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-manufacturer').val(item['label']);
        \$('#input-manufacturer-id').val(item['value']);
    }
});

// Category
\$('#input-category').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/category.autocomplete&user_token=";
        // line 1497
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['category_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-category').val('');

        \$('#product-category-' + item['value']).remove();

        html = '<tr id=\"product-category-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-category tbody').append(html);
    }
});

\$('#product-category').on('click', '.btn', function () {
    \$(this).parent().parent().remove();
});

// Filter
\$('#input-filter').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/filter.autocomplete&user_token=";
        // line 1531
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['filter_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-filter').val('');

        \$('#product-filter-' + item['value']).remove();

        html = '<tr id=\"product-filter-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-filter tbody').append(html);
    }
});

\$('#product-filter').on('click', '.btn', function () {
    \$(this).parent().parent().remove();
});

// Downloads
\$('#input-download').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/download.autocomplete&user_token=";
        // line 1565
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['download_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-download').val('');

        \$('#product-download-' + item['value']).remove();

        html = '<tr id=\"product-download-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-download tbody').append(html);
    }
});

\$('#product-download').on('click', '.btn', function () {
    \$(this).parent().parent().remove();
});

// Related
\$('#input-related').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token=";
        // line 1599
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['product_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-related').val('');

        \$('#product-related-' + item['value']).remove();

        html = '<tr id=\"product-related-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-related tbody').append(html);
    }
});

\$('#product-related').on('click', '.btn', function () {
    \$(this).parent().parent().remove();
});

var attributeautocomplete = function (attribute_row) {
    \$('#input-attribute-' + attribute_row).autocomplete({
        'source': function (request, response) {
            \$.ajax({
                url: 'index.php?route=catalog/attribute.autocomplete&user_token=";
        // line 1633
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
                dataType: 'json',
                success: function (json) {
                    response(\$.map(json, function (item) {
                        return {
                            category: item.attribute_group,
                            label: item.name,
                            value: item.attribute_id
                        }
                    }));
                }
            });
        },
        'select': function (item) {
            \$('#input-attribute-' + attribute_row).val(item['label']);
            \$('#input-attribute-id-' + attribute_row).val(item['value']);
        }
    });
}

var attribute_row = ";
        // line 1653
        echo ($context["attribute_row"] ?? null);
        echo ";

\$('#product-attribute tr').each(function (index) {
    attributeautocomplete(index);
});

\$('#button-attribute').on('click', function () {
    html = '<tr id=\"attribute-row-' + attribute_row + '\">';
    html += '  <td class=\"text-start\">';
    html += '    <input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 1662
        echo twig_escape_filter($this->env, ($context["entry_attribute"] ?? null), "js");
        echo "\" id=\"input-attribute-' + attribute_row + '\" data-oc-target=\"autocomplete-attribute-' + attribute_row + '\" class=\"form-control\" autocomplete=\"off\"/>';
    html += '    <input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" id=\"input-attribute-id-' + attribute_row + '\"/>';
    html += '    <ul id=\"autocomplete-attribute-' + attribute_row + '\" class=\"dropdown-menu\"></ul>';
    html += '  </td>';
    html += '  <td class=\"text-start\">';
  ";
        // line 1667
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1668
            echo "    html += '<div class=\"input-group\">';
    html += '  <div class=\"input-group-text\"><img src=\"";
            // line 1669
            echo twig_get_attribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 1669);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1669), "js");
            echo "\" /></div>';
    html += '  <textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            // line 1670
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1670);
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo twig_escape_filter($this->env, ($context["entry_text"] ?? null), "js");
            echo "\" id=\"input-text-' + attribute_row + '-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1670);
            echo "\" class=\"form-control\"></textarea>';
    html += '</div>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1673
        echo "    html += '  </td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#attribute-row-' + attribute_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1674
        echo twig_escape_filter($this->env, ($context["button_remove"] ?? null), "js");
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-attribute').append(html);

    attributeautocomplete(attribute_row);

    attribute_row++;
});

";
        // line 1684
        if ( !($context["master_id"] ?? null)) {
            // line 1685
            echo "var option_row = ";
            echo ($context["option_row"] ?? null);
            echo ";

\$('#input-option').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/option.autocomplete&user_token=";
            // line 1690
            echo ($context["user_token"] ?? null);
            echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        category: item['category'],
                        label: item['name'],
                        value: item['option_id'],
                        type: item['type'],
                        option_value: item['option_value']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        html = '<fieldset id=\"option-row-' + option_row + '\">';
        html += '  <legend class=\"float-none\">' + item['label'] + ' <button type=\"button\" class=\"btn btn-danger btn-sm float-end\" onclick=\"\$(\\'#option-row-' + option_row + '\\').remove();\"><i class=\"fa-solid fa-minus-circle\"></i></button></legend>';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + item['label'] + '\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';

        html += '  <div class=\"row mb-3\">';
        html += '    <label for=\"input-required-' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 1714
            echo twig_escape_filter($this->env, ($context["entry_required"] ?? null), "js");
            echo "</label>';
        html += '\t   <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required-' + option_row + '\" class=\"form-select\">';
        html += '\t     <option value=\"1\">";
            // line 1716
            echo twig_escape_filter($this->env, ($context["text_yes"] ?? null), "js");
            echo "</option>';
        html += '\t     <option value=\"0\">";
            // line 1717
            echo twig_escape_filter($this->env, ($context["text_no"] ?? null), "js");
            echo "</option>';
        html += '\t </select></div>';
        html += '  </div>';

        if (item['type'] == 'text') {
            html += '\t<div class=\"row mb-3\">';
            html += '\t  <label for=\"input-option-' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 1723
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "</label>';
            html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1724
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "\" id=\"input-option-' + option_row + '\" class=\"form-control\"/></div>';
            html += '\t</div>';
        }

        if (item['type'] == 'textarea') {
            html += '\t<div class=\"row mb-3\">';
            html += '\t  <label for=\"input-option-' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 1730
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "</label>';
            html += '\t  <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
            // line 1731
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "\" id=\"input-option-' + option_row + '\" class=\"form-control\"></textarea></div>';
            html += '\t</div>';
        }

        if (item['type'] == 'file') {
            html += '\t<div class=\"row mb-3 d-none\">';
            html += '\t  <label for=\"input-option-' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 1737
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "</label>';
            html += '\t  <div class=\"col-sm-10 d-none\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1738
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "\" id=\"input-option-' + option_row + '\" class=\"form-control\"/></div>';
            html += '\t</div>';
        }

        if (item['type'] == 'date') {
            html += '\t<div class=\"row mb-3\">';
            html += '\t  <label for=\"input-option-' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 1744
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "</label>';
            html += '\t  <div class=\"col-sm-10 col-md-4\"><div class=\"input-group\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1745
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "\" id=\"input-option-' + option_row + '\" class=\"form-control date\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div></div>';
            html += '\t</div>';
        }

        if (item['type'] == 'time') {
            html += '\t<div class=\"row mb-3\">';
            html += '\t  <label for=\"input-option-' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 1751
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "</label>';
            html += '\t  <div class=\"col-sm-10 col-md-4\"><div class=\"input-group\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1752
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "\" id=\"input-option-' + option_row + '\" class=\"form-control time\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div></div>';
            html += '\t</div>';
        }

        if (item['type'] == 'datetime') {
            html += '\t<div class=\"row mb-3\">';
            html += '\t  <label for=\"input-option-' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 1758
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "</label>';
            html += '\t  <div class=\"col-sm-10 col-md-4\"><div class=\"input-group\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1759
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "\" id=\"input-option-' + option_row + '\" class=\"form-control datetime\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div></div>';
            html += '\t</div>';
        }

        if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
            html += '<div class=\"table-responsive\">';
            html += '  <table id=\"option-value-' + option_row + '\" class=\"table table-bordered table-hover\">';
            html += '  \t <thead>';
            html += '      <tr>';
            html += '        <td class=\"text-start\">";
            // line 1768
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "</td>';
            html += '        <td class=\"text-end\">";
            // line 1769
            echo twig_escape_filter($this->env, ($context["entry_quantity"] ?? null), "js");
            echo "</td>';
            html += '        <td class=\"text-start\">";
            // line 1770
            echo twig_escape_filter($this->env, ($context["entry_subtract"] ?? null), "js");
            echo "</td>';
            html += '        <td class=\"text-end\">";
            // line 1771
            echo twig_escape_filter($this->env, ($context["entry_price"] ?? null), "js");
            echo "</td>';
            html += '        <td class=\"text-end\">";
            // line 1772
            echo twig_escape_filter($this->env, ($context["entry_points"] ?? null), "js");
            echo "</td>';
            html += '        <td class=\"text-end\">";
            // line 1773
            echo twig_escape_filter($this->env, ($context["entry_weight"] ?? null), "js");
            echo "</td>';
            html += '        <td></td>';
            html += '      </tr>';
            html += '    </thead>';
            html += '    <tbody></tbody>';
            html += '    <tfoot>';
            html += '      <tr>';
            html += '        <td colspan=\"6\"></td>';
            html += '        <td class=\"text-end\"><button type=\"button\" data-option-row=\"' + option_row + '\" data-bs-toggle=\"tooltip\" title=\"";
            // line 1781
            echo twig_escape_filter($this->env, ($context["button_option_value_add"] ?? null), "js");
            echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>';
            html += '      </tr>';
            html += '    </tfoot>';
            html += '  </table>';
            html += '</div>';

            html += '  <select id=\"product-option-values-' + option_row + '\" class=\"d-none\">';

            for (i = 0; i < item['option_value'].length; i++) {
                html += '<option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
            }

            html += '  </select>';
            html += '</fieldset>';
        }

        \$('#option').append(html);

        option_row++;
    }
});

var option_value_row = ";
            // line 1803
            echo ($context["option_value_row"] ?? null);
            echo ";

\$('#option').on('click', '.btn-primary', function () {
    var element = this;

    if (\$(element).attr('data-option-value-row')) {
        element.option_value_row = \$(element).attr('data-option-value-row');
    } else {
        element.option_value_row = option_value_row;
    }

    \$('.modal').remove();

    html = '<div id=\"modal-option\" class=\"modal fade\">';
    html += '  <div class=\"modal-dialog\">';
    html += '    <div class=\"modal-content\">';
    html += '      <div class=\"modal-header\">';
    html += '        <h5 class=\"modal-title\"><i class=\"fa-solid fa-pencil\"></i> ";
            // line 1820
            echo twig_escape_filter($this->env, ($context["text_option_value"] ?? null), "js");
            echo "</h5> <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>';
    html += '      </div>';
    html += '      <div class=\"modal-body\">';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-option-value\" class=\"form-label\">";
            // line 1824
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "</label>';
    html += '      \t   <select name=\"option_value_id\" id=\"input-modal-option-value\" class=\"form-select\">';

    option_value = \$('#product-option-values-' + \$(element).attr('data-option-row') + ' option');

    for (i = 0; i < option_value.length; i++) {
        if (\$(element).attr('data-option-value-row') && \$(option_value[i]).val() == \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][option_value_id]\\']').val()) {
            html += '<option value=\"' + \$(option_value[i]).val() + '\" selected>' + \$(option_value[i]).text() + '</option>';
        } else {
            html += '<option value=\"' + \$(option_value[i]).val() + '\">' + \$(option_value[i]).text() + '</option>';
        }
    }

    html += '      \t   </select>';
    html += '          <input type=\"hidden\" name=\"product_option_value_id\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][product_option_value_id]\\']').val() : '') + '\"/>';
    html += '        </div>';

    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-quantity\" class=\"form-label\">";
            // line 1842
            echo twig_escape_filter($this->env, ($context["entry_quantity"] ?? null), "js");
            echo "</label>';
    html += '      \t   <input type=\"text\" name=\"quantity\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][quantity]\\']').val() : '1') + '\" placeholder=\"";
            // line 1843
            echo twig_escape_filter($this->env, ($context["entry_quantity"] ?? null), "js");
            echo "\" id=\"input-modal-quantity\" class=\"form-control\"/>';
    html += '        </div>';

    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-subtract\" class=\"form-label\">";
            // line 1847
            echo twig_escape_filter($this->env, ($context["entry_subtract"] ?? null), "js");
            echo "</label>';
    html += '      \t   <select name=\"subtract\" id=\"input-modal-subtract\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][subtract]\\']').val() == '1') {
        html += '        <option value=\"1\" selected>";
            // line 1851
            echo twig_escape_filter($this->env, ($context["text_yes"] ?? null), "js");
            echo "</option>';
        html += '      \t <option value=\"0\">";
            // line 1852
            echo twig_escape_filter($this->env, ($context["text_no"] ?? null), "js");
            echo "</option>';
    } else {
        html += '      \t <option value=\"1\">";
            // line 1854
            echo twig_escape_filter($this->env, ($context["text_yes"] ?? null), "js");
            echo "</option>';
        html += '      \t <option value=\"0\" selected>";
            // line 1855
            echo twig_escape_filter($this->env, ($context["text_no"] ?? null), "js");
            echo "</option>';
    }

    html += '      \t   </select>';
    html += '        </div>';

    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-price\" class=\"form-label\">";
            // line 1862
            echo twig_escape_filter($this->env, ($context["entry_price"] ?? null), "js");
            echo "</label>';
    html += '          <div class=\"input-group\">';
    html += '            <select name=\"price_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\\']').val() == '+') {
        html += '      \t   <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t   <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"price\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price]\\']').val() : '0') + '\" placeholder=\"";
            // line 1879
            echo twig_escape_filter($this->env, ($context["entry_price"] ?? null), "js");
            echo "\" id=\"input-modal-price\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';

    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-points\" class=\"form-label\">";
            // line 1884
            echo twig_escape_filter($this->env, ($context["entry_points"] ?? null), "js");
            echo "</label>';
    html += '          <div class=\"input-group\">';
    html += '      \t     <select name=\"points_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\\']').val() == '+') {
        html += '      \t       <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t       <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"points\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points]\\']').val() : '0') + '\" placeholder=\"";
            // line 1901
            echo twig_escape_filter($this->env, ($context["entry_points"] ?? null), "js");
            echo "\" id=\"input-modal-points\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';

    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-weight\" class=\"form-label\">";
            // line 1906
            echo twig_escape_filter($this->env, ($context["entry_weight"] ?? null), "js");
            echo "</label>';
    html += '          <div class=\"input-group\">';
    html += '      \t     <select name=\"weight_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\\']').val() == '+') {
        html += '      \t       <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t       <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"weight\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight]\\']').val() : '0') + '\" placeholder=\"";
            // line 1923
            echo twig_escape_filter($this->env, ($context["entry_weight"] ?? null), "js");
            echo "\" id=\"input-modal-weight\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';

    html += '      </div>';

    html += '      <div class=\"modal-footer\">';
    html += '\t     <button type=\"button\" id=\"button-save\" data-option-row=\"' + \$(element).attr('data-option-row') + '\" data-option-value-row=\"' + element.option_value_row + '\" class=\"btn btn-primary\">";
            // line 1930
            echo twig_escape_filter($this->env, ($context["button_save"] ?? null), "js");
            echo "</button> <button type=\"button\" class=\"btn btn-light\" data-bs-dismiss=\"modal\">";
            echo twig_escape_filter($this->env, ($context["button_cancel"] ?? null), "js");
            echo "</button>';
    html += '      </div>';
    html += '    </div>';
    html += '  </div>';
    html += '</div>';

    \$('body').append(html);

    \$('#modal-option').modal('show');

    \$('#modal-option #button-save').on('click', function () {
        html = '<tr id=\"option-value-row-' + element.option_value_row + '\">';
        html += '  <td class=\"text-start\">' + \$('#modal-option select[name=\\'option_value_id\\'] option:selected').text() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][option_value_id]\" value=\"' + \$('#modal-option select[name=\\'option_value_id\\']').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][product_option_value_id]\" value=\"' + \$('#modal-option input[name=\\'product_option_value_id\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option input[name=\\'quantity\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][quantity]\" value=\"' + \$('#modal-option input[name=\\'quantity\\']').val() + '\"/></td>';
        html += '  <td class=\"text-start\">' + (\$('#modal-option select[name=\\'subtract\\'] option:selected').val() == '1' ? '";
            // line 1944
            echo twig_escape_filter($this->env, ($context["text_yes"] ?? null), "js");
            echo "' : '";
            echo twig_escape_filter($this->env, ($context["text_no"] ?? null), "js");
            echo "') + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][subtract]\" value=\"' + \$('#modal-option select[name=\\'subtract\\'] option:selected').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option select[name=\\'price_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'price\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\" value=\"' + \$('#modal-option select[name=\\'price_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price]\" value=\"' + \$('#modal-option input[name=\\'price\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\"> ' + \$('#modal-option select[name=\\'points_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'points\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\" value=\"' + \$('#modal-option select[name=\\'points_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points]\" value=\"' + \$('#modal-option input[name=\\'points\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option select[name=\\'weight_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'weight\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\" value=\"' + \$('#modal-option select[name=\\'weight_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight]\" value=\"' + \$('#modal-option input[name=\\'weight\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
            // line 1948
            echo twig_escape_filter($this->env, ($context["button_edit"] ?? null), "js");
            echo "\" data-option-row=\"' + \$(element).attr('data-option-row') + '\" data-option-value-row=\"' + element.option_value_row + '\"class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></button> <button type=\"button\" onclick=\"\$(\\'#option-value-row-' + element.option_value_row + '\\').remove();\" data-bs-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, ($context["button_remove"] ?? null), "js");
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        if (\$(element).attr('data-option-value-row')) {
            \$('#option-value-row-' + element.option_value_row).replaceWith(html);
        } else {
            \$('#option-value-' + \$(element).attr('data-option-row')).append(html);

            option_value_row++;
        }

        \$('#modal-option').modal('hide');
    });
});
";
        }
        // line 1963
        echo "
var discount_row = ";
        // line 1964
        echo ($context["discount_row"] ?? null);
        echo ";

\$('#button-discount').on('click', function () {
    html = '<tr id=\"discount-row-' + discount_row + '\">';
    html += '  <td class=\"text-start\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-select\">';
  ";
        // line 1969
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1970
            echo "    html += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1970);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1970), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1972
        echo "    html += '  </select><input type=\"hidden\" name=\"product_discount[' + discount_row + '][product_discount_id]\" value=\"\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1973
        echo twig_escape_filter($this->env, ($context["entry_quantity"] ?? null), "js");
        echo "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1974
        echo twig_escape_filter($this->env, ($context["entry_priority"] ?? null), "js");
        echo "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 1975
        echo twig_escape_filter($this->env, ($context["entry_price"] ?? null), "js");
        echo "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-start\"><div class=\"input-group\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1976
        echo twig_escape_filter($this->env, ($context["entry_date_start"] ?? null), "js");
        echo "\" class=\"form-control date\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div></td>';
    html += '  <td class=\"text-start\"><div class=\"input-group\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1977
        echo twig_escape_filter($this->env, ($context["entry_date_end"] ?? null), "js");
        echo "\" class=\"form-control date\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#discount-row-' + discount_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1978
        echo twig_escape_filter($this->env, ($context["button_remove"] ?? null), "js");
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-discount tbody').append(html);

    discount_row++;
});

var special_row = ";
        // line 1986
        echo ($context["special_row"] ?? null);
        echo ";

\$('#button-special').on('click', function () {
    html = '<tr id=\"special-row-' + special_row + '\">';
    html += '  <td class=\"text-start\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-select\">';
  ";
        // line 1991
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1992
            echo "    html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1992);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1992), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1994
        echo "    html += '  </select><input type=\"hidden\" name=\"product_special[' + special_row + '][product_special_id]\" value=\"\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1995
        echo twig_escape_filter($this->env, ($context["entry_priority"] ?? null), "js");
        echo "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 1996
        echo twig_escape_filter($this->env, ($context["entry_price"] ?? null), "js");
        echo "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-start\"><div class=\"input-group\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1997
        echo twig_escape_filter($this->env, ($context["entry_date_start"] ?? null), "js");
        echo "\" class=\"form-control date\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div></td>';
    html += '  <td class=\"text-start\"><div class=\"input-group\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1998
        echo twig_escape_filter($this->env, ($context["entry_date_end"] ?? null), "js");
        echo "\" class=\"form-control date\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#special-row-' + special_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1999
        echo twig_escape_filter($this->env, ($context["button_remove"] ?? null), "js");
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-special tbody').append(html);

    special_row++;
});

var image_row = ";
        // line 2007
        echo ($context["image_row"] ?? null);
        echo ";

\$('#button-image').on('click', function () {
    html = '<tr id=\"product-image-row-' + image_row + '\">';
    html += '  <td><div class=\"card image\">';
    html += '    <img src=\"";
        // line 2012
        echo twig_escape_filter($this->env, ($context["placeholder"] ?? null), "js");
        echo "\" alt=\"\" title=\"\" id=\"thumb-image-' + image_row + '\" data-oc-placeholder=\"";
        echo twig_escape_filter($this->env, ($context["placeholder"] ?? null), "js");
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-product-image-' + image_row + '\"/>';
    html += '    <div class=\"card-body\">';
    html += '      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-product-image-' + image_row + '\" data-oc-thumb=\"#thumb-image-' + image_row + '\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 2014
        echo twig_escape_filter($this->env, ($context["button_edit"] ?? null), "js");
        echo "</button>';
    html += '      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-product-image-' + image_row + '\" data-oc-thumb=\"#thumb-image-' + image_row + '\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 2015
        echo twig_escape_filter($this->env, ($context["button_clear"] ?? null), "js");
        echo "</button>';
    html += '    </div>';
    html += '  </div></td>';
    html += '  <td class=\"text-start\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"0\" placeholder=\"";
        // line 2018
        echo twig_escape_filter($this->env, ($context["entry_sort_order"] ?? null), "js");
        echo "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#product-image-row-' + image_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2019
        echo twig_escape_filter($this->env, ($context["button_remove"] ?? null), "js");
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-image tbody').append(html);

    image_row++;
});

var subscription_row = ";
        // line 2027
        echo ($context["subscription_row"] ?? null);
        echo ";

\$('#button-subscription').on('click', function () {
    html = '<tr id=\"subscription-row-' + subscription_row + '\">';
    html += '  <td class=\"text-start\"><select name=\"product_subscription[' + subscription_row + '][subscription_plan_id]\" class=\"form-select\">';
  ";
        // line 2032
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subscription_plans"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
            // line 2033
            echo "    html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 2033);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 2033), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_plan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2035
        echo "    html += '  </select></td>';
    html += '  <td class=\"text-start\"><select name=\"product_subscription[' + subscription_row + '][customer_group_id]\" class=\"form-select\">';
  ";
        // line 2037
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2038
            echo "    html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2038);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2038), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2040
        echo "    html += '  <select></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_subscription[' + subscription_row + '][trial_price]\" value=\"\" placeholder=\"";
        // line 2041
        echo twig_escape_filter($this->env, ($context["entry_trial_price"] ?? null), "js");
        echo "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_subscription[' + subscription_row + '][price]\" value=\"\" placeholder=\"";
        // line 2042
        echo twig_escape_filter($this->env, ($context["entry_price"] ?? null), "js");
        echo "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#subscription-row-' + subscription_row + '\\').remove()\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2043
        echo twig_escape_filter($this->env, ($context["button_remove"] ?? null), "js");
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-subscription tbody').append(html);

    subscription_row++;
});

";
        // line 2051
        if (($context["master_id"] ?? null)) {
            // line 2052
            echo "// Variable products
\$('input[data-oc-toggle=\\'switch\\']').on('change', function (e) {
    var element = this;

    var target = \$(this).attr('data-oc-target');

    // First we need to grab the default values
    // Now we need to enable or disable any fields in the targets
    \$.merge(\$(target), \$(target).find('input, textarea, select, button')).not('[data-oc-toggle=\\'switch\\']').each(function (i, elem) {
        // Text Textarea
        if (\$(this).is('input[type=\\'text\\'], textarea')) {
            \$(this).prop('readonly', !\$(element).prop('checked'));
        }

        // CKEditor readonly
        if (\$(this).is('[data-oc-toggle=\\'ckeditor\\']')) {
            var editor = CKEDITOR.instances[\$(this).attr('id')];

            if (editor.editable() == undefined) {
                editor.on('instanceReady', function () {
                    this.setReadOnly(!\$(element).prop('checked'));
                });
            } else {
                editor.setReadOnly(!\$(element).prop('checked'));
            }
        }

        // Radio Checkbox
        if (\$(this).is('input[type=\\'radio\\'], input[type=\\'checkbox\\'], div[data-bs-toggle=\\'buttons\\']')) {
            if (!\$(element).prop('checked')) {
                \$(this).on('click', function (e) {
                    return false;
                });
            } else {
                \$(this).off('click');
            }
        }

        // Select
        if (\$(this).is('select')) {
            if (!\$(element).prop('checked')) {
                \$(this).addClass('.disabled');

                \$(this).prop('readonly', true);
            } else {
                \$(this).removeClass('disabled');

                \$(this).prop('readonly', false);
            }

            \$(this).find('option').not(':selected').prop('disabled', !\$(element).prop('checked'));
        }

        // Button
        if (\$(this).is('button')) {
            if (!\$(element).prop('checked')) {
                \$(this).prop('disabled', true);
            } else {
                \$(this).prop('disabled', false);
            }
        }
    });
});

\$('input[data-oc-toggle=\\'switch\\']').trigger('change');
";
        }
        // line 2118
        echo "
\$('#report').on('click', '.pagination a', function (e) {
    e.preventDefault();

    \$('#report').load(this.href);
});
//--></script>
";
        // line 2125
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "qihaoyang/view/template/catalog/product_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  5113 => 2125,  5104 => 2118,  5036 => 2052,  5034 => 2051,  5023 => 2043,  5019 => 2042,  5015 => 2041,  5012 => 2040,  5001 => 2038,  4997 => 2037,  4993 => 2035,  4982 => 2033,  4978 => 2032,  4970 => 2027,  4959 => 2019,  4955 => 2018,  4949 => 2015,  4945 => 2014,  4938 => 2012,  4930 => 2007,  4919 => 1999,  4915 => 1998,  4911 => 1997,  4907 => 1996,  4903 => 1995,  4900 => 1994,  4889 => 1992,  4885 => 1991,  4877 => 1986,  4866 => 1978,  4862 => 1977,  4858 => 1976,  4854 => 1975,  4850 => 1974,  4846 => 1973,  4843 => 1972,  4832 => 1970,  4828 => 1969,  4820 => 1964,  4817 => 1963,  4797 => 1948,  4788 => 1944,  4769 => 1930,  4759 => 1923,  4739 => 1906,  4731 => 1901,  4711 => 1884,  4703 => 1879,  4683 => 1862,  4673 => 1855,  4669 => 1854,  4664 => 1852,  4660 => 1851,  4653 => 1847,  4646 => 1843,  4642 => 1842,  4621 => 1824,  4614 => 1820,  4594 => 1803,  4569 => 1781,  4558 => 1773,  4554 => 1772,  4550 => 1771,  4546 => 1770,  4542 => 1769,  4538 => 1768,  4526 => 1759,  4522 => 1758,  4513 => 1752,  4509 => 1751,  4500 => 1745,  4496 => 1744,  4487 => 1738,  4483 => 1737,  4474 => 1731,  4470 => 1730,  4461 => 1724,  4457 => 1723,  4448 => 1717,  4444 => 1716,  4439 => 1714,  4412 => 1690,  4403 => 1685,  4401 => 1684,  4388 => 1674,  4385 => 1673,  4372 => 1670,  4366 => 1669,  4363 => 1668,  4359 => 1667,  4351 => 1662,  4339 => 1653,  4316 => 1633,  4279 => 1599,  4242 => 1565,  4205 => 1531,  4168 => 1497,  4143 => 1475,  4135 => 1470,  4125 => 1463,  4114 => 1455,  4107 => 1451,  4103 => 1450,  4094 => 1443,  4086 => 1440,  4071 => 1438,  4067 => 1437,  4062 => 1435,  4058 => 1434,  4055 => 1433,  4051 => 1432,  4045 => 1428,  4037 => 1425,  4034 => 1424,  4032 => 1423,  4028 => 1422,  4024 => 1421,  4013 => 1412,  4005 => 1409,  3995 => 1408,  3978 => 1406,  3972 => 1405,  3969 => 1404,  3965 => 1403,  3960 => 1401,  3957 => 1400,  3953 => 1399,  3946 => 1395,  3942 => 1394,  3934 => 1389,  3925 => 1382,  3914 => 1379,  3910 => 1378,  3907 => 1377,  3903 => 1376,  3897 => 1372,  3889 => 1369,  3886 => 1368,  3884 => 1367,  3880 => 1366,  3876 => 1365,  3868 => 1360,  3860 => 1355,  3857 => 1354,  3848 => 1350,  3844 => 1348,  3842 => 1347,  3836 => 1346,  3830 => 1343,  3825 => 1341,  3812 => 1331,  3806 => 1327,  3800 => 1326,  3798 => 1325,  3791 => 1323,  3783 => 1322,  3772 => 1318,  3764 => 1317,  3749 => 1315,  3742 => 1312,  3737 => 1311,  3735 => 1310,  3728 => 1305,  3720 => 1302,  3717 => 1301,  3715 => 1300,  3709 => 1297,  3705 => 1296,  3697 => 1291,  3687 => 1283,  3678 => 1279,  3674 => 1277,  3672 => 1276,  3667 => 1274,  3663 => 1273,  3654 => 1271,  3647 => 1267,  3634 => 1257,  3628 => 1253,  3622 => 1252,  3620 => 1251,  3613 => 1249,  3602 => 1245,  3589 => 1239,  3579 => 1236,  3571 => 1235,  3568 => 1234,  3553 => 1232,  3549 => 1231,  3545 => 1230,  3540 => 1229,  3535 => 1228,  3533 => 1227,  3527 => 1223,  3519 => 1221,  3516 => 1220,  3514 => 1219,  3510 => 1218,  3506 => 1217,  3502 => 1216,  3498 => 1215,  3494 => 1214,  3479 => 1202,  3473 => 1198,  3467 => 1197,  3465 => 1196,  3458 => 1194,  3447 => 1190,  3434 => 1184,  3424 => 1181,  3416 => 1180,  3408 => 1179,  3405 => 1178,  3390 => 1176,  3386 => 1175,  3382 => 1174,  3377 => 1173,  3372 => 1172,  3370 => 1171,  3364 => 1167,  3356 => 1165,  3353 => 1164,  3351 => 1163,  3347 => 1162,  3343 => 1161,  3339 => 1160,  3335 => 1159,  3331 => 1158,  3327 => 1157,  3312 => 1145,  3306 => 1141,  3300 => 1140,  3298 => 1139,  3291 => 1137,  3283 => 1136,  3275 => 1135,  3272 => 1134,  3257 => 1132,  3253 => 1131,  3249 => 1130,  3246 => 1129,  3231 => 1127,  3227 => 1126,  3223 => 1125,  3218 => 1124,  3213 => 1123,  3211 => 1122,  3205 => 1118,  3197 => 1115,  3194 => 1114,  3192 => 1113,  3187 => 1111,  3183 => 1110,  3179 => 1109,  3175 => 1108,  3167 => 1102,  3163 => 1100,  3155 => 1097,  3148 => 1093,  3131 => 1089,  3120 => 1085,  3112 => 1082,  3105 => 1081,  3103 => 1080,  3100 => 1079,  3093 => 1075,  3076 => 1071,  3067 => 1067,  3063 => 1066,  3056 => 1064,  3049 => 1063,  3047 => 1062,  3044 => 1061,  3037 => 1057,  3020 => 1053,  3009 => 1049,  3001 => 1046,  2994 => 1045,  2992 => 1044,  2989 => 1043,  2982 => 1039,  2965 => 1035,  2953 => 1032,  2943 => 1031,  2935 => 1030,  2921 => 1029,  2915 => 1026,  2908 => 1025,  2906 => 1024,  2903 => 1023,  2896 => 1019,  2879 => 1015,  2867 => 1012,  2859 => 1009,  2852 => 1008,  2850 => 1007,  2847 => 1006,  2840 => 1002,  2823 => 998,  2811 => 995,  2803 => 992,  2796 => 991,  2794 => 990,  2791 => 989,  2784 => 985,  2767 => 981,  2762 => 978,  2754 => 975,  2747 => 973,  2745 => 972,  2740 => 971,  2712 => 970,  2709 => 969,  2705 => 968,  2701 => 967,  2695 => 964,  2688 => 963,  2686 => 962,  2683 => 961,  2676 => 957,  2659 => 953,  2654 => 950,  2646 => 947,  2639 => 945,  2637 => 944,  2632 => 943,  2616 => 942,  2602 => 941,  2599 => 940,  2595 => 939,  2591 => 938,  2585 => 935,  2578 => 934,  2576 => 933,  2573 => 932,  2566 => 928,  2549 => 924,  2544 => 921,  2537 => 919,  2530 => 918,  2528 => 917,  2517 => 916,  2513 => 915,  2509 => 914,  2503 => 913,  2497 => 910,  2490 => 909,  2488 => 908,  2483 => 906,  2480 => 905,  2476 => 904,  2472 => 902,  2462 => 895,  2457 => 893,  2452 => 891,  2447 => 889,  2442 => 886,  2436 => 885,  2434 => 884,  2430 => 882,  2425 => 879,  2422 => 878,  2411 => 876,  2406 => 875,  2404 => 874,  2400 => 873,  2391 => 869,  2385 => 865,  2379 => 864,  2377 => 863,  2364 => 861,  2350 => 860,  2345 => 859,  2331 => 858,  2326 => 857,  2312 => 856,  2307 => 855,  2298 => 854,  2292 => 852,  2286 => 850,  2284 => 849,  2274 => 848,  2260 => 847,  2256 => 846,  2251 => 845,  2247 => 844,  2243 => 843,  2236 => 839,  2232 => 838,  2228 => 837,  2224 => 836,  2220 => 835,  2216 => 834,  2210 => 830,  2208 => 829,  2205 => 828,  2190 => 822,  2182 => 819,  2179 => 818,  2177 => 817,  2174 => 816,  2159 => 810,  2151 => 807,  2148 => 806,  2146 => 805,  2143 => 804,  2128 => 798,  2120 => 795,  2117 => 794,  2115 => 793,  2112 => 792,  2100 => 789,  2094 => 788,  2091 => 787,  2089 => 786,  2086 => 785,  2073 => 781,  2066 => 779,  2063 => 778,  2061 => 777,  2058 => 776,  2045 => 772,  2038 => 770,  2035 => 769,  2033 => 768,  2021 => 763,  2013 => 762,  2007 => 761,  2000 => 759,  1980 => 756,  1974 => 755,  1970 => 754,  1967 => 753,  1962 => 752,  1959 => 751,  1957 => 750,  1952 => 747,  1950 => 746,  1941 => 740,  1935 => 736,  1929 => 735,  1927 => 734,  1920 => 732,  1917 => 731,  1898 => 729,  1892 => 728,  1889 => 727,  1885 => 726,  1879 => 723,  1871 => 722,  1859 => 721,  1853 => 719,  1848 => 718,  1846 => 717,  1840 => 713,  1832 => 710,  1829 => 709,  1827 => 708,  1822 => 706,  1818 => 705,  1806 => 696,  1803 => 695,  1794 => 691,  1790 => 689,  1788 => 688,  1783 => 685,  1771 => 681,  1766 => 680,  1762 => 679,  1753 => 673,  1748 => 671,  1741 => 667,  1738 => 666,  1729 => 662,  1725 => 660,  1723 => 659,  1718 => 656,  1706 => 652,  1701 => 651,  1697 => 650,  1688 => 644,  1683 => 642,  1677 => 638,  1668 => 634,  1664 => 632,  1662 => 631,  1659 => 630,  1640 => 627,  1637 => 626,  1633 => 625,  1626 => 621,  1619 => 617,  1616 => 616,  1607 => 612,  1603 => 610,  1601 => 609,  1596 => 606,  1584 => 602,  1579 => 601,  1575 => 600,  1566 => 594,  1561 => 592,  1554 => 588,  1551 => 587,  1542 => 583,  1538 => 581,  1536 => 580,  1531 => 577,  1519 => 573,  1514 => 572,  1510 => 571,  1501 => 565,  1496 => 563,  1489 => 559,  1484 => 557,  1481 => 556,  1471 => 551,  1467 => 549,  1465 => 548,  1459 => 547,  1453 => 544,  1444 => 537,  1435 => 533,  1431 => 531,  1429 => 530,  1423 => 529,  1417 => 526,  1411 => 522,  1402 => 518,  1398 => 516,  1396 => 515,  1389 => 513,  1382 => 509,  1376 => 505,  1367 => 501,  1363 => 499,  1361 => 498,  1358 => 497,  1343 => 495,  1339 => 494,  1332 => 490,  1326 => 486,  1317 => 482,  1313 => 480,  1311 => 479,  1305 => 478,  1299 => 475,  1293 => 471,  1284 => 467,  1280 => 465,  1278 => 464,  1275 => 463,  1260 => 461,  1256 => 460,  1249 => 456,  1243 => 452,  1234 => 448,  1230 => 446,  1228 => 445,  1221 => 444,  1212 => 440,  1208 => 438,  1206 => 437,  1199 => 436,  1190 => 432,  1186 => 430,  1184 => 429,  1178 => 428,  1172 => 425,  1166 => 421,  1157 => 417,  1153 => 415,  1151 => 414,  1143 => 411,  1135 => 406,  1130 => 404,  1123 => 399,  1114 => 395,  1110 => 393,  1108 => 392,  1101 => 390,  1095 => 387,  1088 => 383,  1085 => 382,  1076 => 378,  1072 => 376,  1070 => 375,  1067 => 374,  1052 => 372,  1048 => 371,  1041 => 367,  1033 => 361,  1024 => 357,  1020 => 355,  1018 => 354,  1010 => 351,  1001 => 345,  994 => 341,  991 => 340,  982 => 336,  978 => 334,  976 => 333,  970 => 332,  964 => 329,  955 => 325,  950 => 323,  945 => 321,  938 => 316,  929 => 312,  925 => 310,  923 => 309,  920 => 308,  905 => 306,  901 => 305,  897 => 304,  890 => 300,  884 => 296,  875 => 292,  871 => 290,  869 => 289,  863 => 288,  857 => 285,  852 => 283,  845 => 278,  836 => 274,  832 => 272,  830 => 271,  824 => 270,  818 => 267,  811 => 263,  808 => 262,  799 => 258,  795 => 256,  793 => 255,  787 => 254,  781 => 251,  774 => 247,  771 => 246,  762 => 242,  758 => 240,  756 => 239,  750 => 238,  744 => 235,  737 => 231,  734 => 230,  725 => 226,  721 => 224,  719 => 223,  713 => 222,  707 => 219,  700 => 215,  697 => 214,  688 => 210,  684 => 208,  682 => 207,  676 => 206,  670 => 203,  663 => 199,  660 => 198,  651 => 194,  647 => 192,  645 => 191,  639 => 190,  633 => 187,  626 => 183,  623 => 182,  614 => 178,  610 => 176,  608 => 175,  602 => 174,  596 => 171,  589 => 166,  580 => 162,  576 => 160,  574 => 159,  568 => 158,  562 => 155,  557 => 153,  552 => 151,  547 => 148,  528 => 143,  525 => 142,  508 => 138,  504 => 136,  502 => 135,  492 => 134,  484 => 131,  478 => 127,  461 => 123,  457 => 121,  455 => 120,  445 => 119,  437 => 116,  431 => 112,  414 => 108,  410 => 106,  408 => 105,  398 => 104,  390 => 101,  383 => 97,  380 => 96,  363 => 92,  359 => 90,  357 => 89,  347 => 88,  339 => 85,  333 => 81,  316 => 77,  312 => 75,  310 => 74,  297 => 72,  288 => 68,  281 => 64,  278 => 63,  271 => 59,  259 => 58,  255 => 56,  253 => 55,  243 => 54,  235 => 51,  225 => 49,  208 => 48,  204 => 46,  177 => 44,  160 => 43,  152 => 38,  148 => 37,  144 => 36,  140 => 35,  136 => 34,  132 => 33,  128 => 32,  124 => 31,  120 => 30,  116 => 29,  112 => 28,  108 => 27,  104 => 26,  98 => 23,  93 => 21,  90 => 20,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "qihaoyang/view/template/catalog/product_form.twig", "D:\\wwwroot\\opencart-4.0.2.2\\upload\\qihaoyang\\view\\template\\catalog\\product_form.twig");
    }
}
