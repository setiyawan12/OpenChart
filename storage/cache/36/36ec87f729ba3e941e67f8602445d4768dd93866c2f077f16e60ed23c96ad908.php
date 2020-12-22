<?php

/* extension/payment/pp_standard.twig */
class __TwigTemplate_5506e1a832061a9e9adc58be2bebaab1af64226a9032be8e3949a12c98ad4294 extends Twig_Template
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
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-payment\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i>";
        // line 24
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-payment\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 29
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
            <li><a href=\"#tab-status\" data-toggle=\"tab\">";
        // line 30
        echo (isset($context["tab_order_status"]) ? $context["tab_order_status"] : null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"entry-email\">";
        // line 35
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"payment_pp_standard_email\" value=\"";
        // line 37
        echo (isset($context["payment_pp_standard_email"]) ? $context["payment_pp_standard_email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"entry-email\" class=\"form-control\"/>";
        // line 38
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 39
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>";
        }
        // line 41
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-live-demo\"><span data-toggle=\"tooltip\" title=\"";
        // line 44
        echo (isset($context["help_test"]) ? $context["help_test"] : null);
        echo "\">";
        echo (isset($context["entry_test"]) ? $context["entry_test"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_standard_test\" id=\"input-live-demo\" class=\"form-control\">";
        // line 47
        if ((isset($context["payment_pp_standard_test"]) ? $context["payment_pp_standard_test"] : null)) {
            // line 48
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                    <option value=\"0\">";
            // line 49
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>";
        } else {
            // line 51
            echo "                    <option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 52
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>";
        }
        // line 54
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-debug\"><span data-toggle=\"tooltip\" title=\"";
        // line 58
        echo (isset($context["help_debug"]) ? $context["help_debug"] : null);
        echo "\">";
        echo (isset($context["entry_debug"]) ? $context["entry_debug"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_standard_debug\" id=\"input-debug\" class=\"form-control\">";
        // line 61
        if ((isset($context["payment_pp_standard_debug"]) ? $context["payment_pp_standard_debug"] : null)) {
            // line 62
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\">";
            // line 63
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>";
        } else {
            // line 65
            echo "                    <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 66
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>";
        }
        // line 68
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-transaction\">";
        // line 72
        echo (isset($context["entry_transaction"]) ? $context["entry_transaction"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_standard_transaction\" id=\"input-transaction\" class=\"form-control\">";
        // line 75
        if ( !(isset($context["payment_pp_standard_transaction"]) ? $context["payment_pp_standard_transaction"] : null)) {
            // line 76
            echo "                    <option value=\"0\" selected=\"selected\">";
            echo (isset($context["text_authorization"]) ? $context["text_authorization"] : null);
            echo "</option>";
        } else {
            // line 78
            echo "                    <option value=\"0\">";
            echo (isset($context["text_authorization"]) ? $context["text_authorization"] : null);
            echo "</option>";
        }
        // line 80
        if ((isset($context["payment_pp_standard_transaction"]) ? $context["payment_pp_standard_transaction"] : null)) {
            // line 81
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_sale"]) ? $context["text_sale"] : null);
            echo "</option>";
        } else {
            // line 83
            echo "                    <option value=\"1\">";
            echo (isset($context["text_sale"]) ? $context["text_sale"] : null);
            echo "</option>";
        }
        // line 85
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\" title=\"";
        // line 89
        echo (isset($context["help_total"]) ? $context["help_total"] : null);
        echo "\">";
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"payment_pp_standard_total\" value=\"";
        // line 91
        echo (isset($context["payment_pp_standard_total"]) ? $context["payment_pp_standard_total"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo "\" id=\"input-total\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 95
        echo (isset($context["entry_geo_zone"]) ? $context["entry_geo_zone"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_standard_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
                    <option value=\"0\">";
        // line 98
        echo (isset($context["text_all_zones"]) ? $context["text_all_zones"] : null);
        echo "</option>";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geo_zones"]) ? $context["geo_zones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 100
            if (($this->getAttribute($context["geo_zone"], "geo_zone_id", array()) == (isset($context["payment_pp_standard_geo_zone_id"]) ? $context["payment_pp_standard_geo_zone_id"] : null))) {
                // line 101
                echo "                    <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>";
            } else {
                // line 103
                echo "                    <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 110
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_standard_status\" id=\"input-status\" class=\"form-control\">";
        // line 113
        if ((isset($context["payment_pp_standard_status"]) ? $context["payment_pp_standard_status"] : null)) {
            // line 114
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\">";
            // line 115
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>";
        } else {
            // line 117
            echo "                    <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 118
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>";
        }
        // line 120
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 124
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"payment_pp_standard_sort_order\" value=\"";
        // line 126
        echo (isset($context["payment_pp_standard_sort_order"]) ? $context["payment_pp_standard_sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-status\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-canceled-reversal-status\">";
        // line 132
        echo (isset($context["entry_canceled_reversal_status"]) ? $context["entry_canceled_reversal_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_standard_canceled_reversal_status_id\" id=\"input-canceled-reversal-status\" class=\"form-control\">";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 136
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_pp_standard_canceled_reversal_status_id"]) ? $context["payment_pp_standard_canceled_reversal_status_id"] : null))) {
                // line 137
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>";
            } else {
                // line 139
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-completed-status\">";
        // line 146
        echo (isset($context["entry_completed_status"]) ? $context["entry_completed_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_standard_completed_status_id\" id=\"input-completed-status\" class=\"form-control\">";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 150
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_pp_standard_completed_status_id"]) ? $context["payment_pp_standard_completed_status_id"] : null))) {
                // line 151
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>";
            } else {
                // line 153
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-denied-status\">";
        // line 160
        echo (isset($context["entry_denied_status"]) ? $context["entry_denied_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_standard_denied_status_id\" id=\"input-denied-status\" class=\"form-control\">";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 164
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_pp_standard_denied_status_id"]) ? $context["payment_pp_standard_denied_status_id"] : null))) {
                // line 165
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>";
            } else {
                // line 167
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-expired-status\">";
        // line 174
        echo (isset($context["entry_expired_status"]) ? $context["entry_expired_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_standard_expired_status_id\" id=\"input-expired-status\" class=\"form-control\">";
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 178
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_pp_standard_expired_status_id"]) ? $context["payment_pp_standard_expired_status_id"] : null))) {
                // line 179
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>";
            } else {
                // line 181
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-failed-status\">";
        // line 188
        echo (isset($context["entry_failed_status"]) ? $context["entry_failed_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_standard_failed_status_id\" id=\"input-failed-status\" class=\"form-control\">";
        // line 191
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 192
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_pp_standard_failed_status_id"]) ? $context["payment_pp_standard_failed_status_id"] : null))) {
                // line 193
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>";
            } else {
                // line 195
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-pending-status\">";
        // line 202
        echo (isset($context["entry_pending_status"]) ? $context["entry_pending_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_standard_pending_status_id\" id=\"input-pending-status\" class=\"form-control\">";
        // line 205
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 206
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_pp_standard_pending_status_id"]) ? $context["payment_pp_standard_pending_status_id"] : null))) {
                // line 207
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>";
            } else {
                // line 209
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-processed-status\">";
        // line 216
        echo (isset($context["entry_processed_status"]) ? $context["entry_processed_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_standard_processed_status_id\" id=\"input-processed-status\" class=\"form-control\">";
        // line 219
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 220
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_pp_standard_processed_status_id"]) ? $context["payment_pp_standard_processed_status_id"] : null))) {
                // line 221
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>";
            } else {
                // line 223
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-refunded-status\">";
        // line 230
        echo (isset($context["entry_refunded_status"]) ? $context["entry_refunded_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_standard_refunded_status_id\" id=\"input-refunded-status\" class=\"form-control\">";
        // line 233
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 234
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_pp_standard_refunded_status_id"]) ? $context["payment_pp_standard_refunded_status_id"] : null))) {
                // line 235
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>";
            } else {
                // line 237
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-reversed-status\">";
        // line 244
        echo (isset($context["entry_reversed_status"]) ? $context["entry_reversed_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_standard_reversed_status_id\" id=\"input-reversed-status\" class=\"form-control\">";
        // line 247
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 248
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_pp_standard_reversed_status_id"]) ? $context["payment_pp_standard_reversed_status_id"] : null))) {
                // line 249
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>";
            } else {
                // line 251
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 254
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-void-status\">";
        // line 258
        echo (isset($context["entry_voided_status"]) ? $context["entry_voided_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_standard_voided_status_id\" id=\"input-void-status\" class=\"form-control\">";
        // line 261
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 262
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_pp_standard_voided_status_id"]) ? $context["payment_pp_standard_voided_status_id"] : null))) {
                // line 263
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>";
            } else {
                // line 265
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 268
        echo "                  </select>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>";
        // line 278
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/payment/pp_standard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  677 => 278,  666 => 268,  655 => 265,  648 => 263,  646 => 262,  642 => 261,  637 => 258,  631 => 254,  620 => 251,  613 => 249,  611 => 248,  607 => 247,  602 => 244,  596 => 240,  585 => 237,  578 => 235,  576 => 234,  572 => 233,  567 => 230,  561 => 226,  550 => 223,  543 => 221,  541 => 220,  537 => 219,  532 => 216,  526 => 212,  515 => 209,  508 => 207,  506 => 206,  502 => 205,  497 => 202,  491 => 198,  480 => 195,  473 => 193,  471 => 192,  467 => 191,  462 => 188,  456 => 184,  445 => 181,  438 => 179,  436 => 178,  432 => 177,  427 => 174,  421 => 170,  410 => 167,  403 => 165,  401 => 164,  397 => 163,  392 => 160,  386 => 156,  375 => 153,  368 => 151,  366 => 150,  362 => 149,  357 => 146,  351 => 142,  340 => 139,  333 => 137,  331 => 136,  327 => 135,  322 => 132,  311 => 126,  306 => 124,  300 => 120,  296 => 118,  291 => 117,  287 => 115,  282 => 114,  280 => 113,  275 => 110,  269 => 106,  258 => 103,  251 => 101,  249 => 100,  245 => 99,  242 => 98,  236 => 95,  227 => 91,  220 => 89,  214 => 85,  209 => 83,  204 => 81,  202 => 80,  197 => 78,  192 => 76,  190 => 75,  185 => 72,  179 => 68,  175 => 66,  170 => 65,  166 => 63,  161 => 62,  159 => 61,  152 => 58,  146 => 54,  142 => 52,  137 => 51,  133 => 49,  128 => 48,  126 => 47,  119 => 44,  114 => 41,  109 => 39,  107 => 38,  102 => 37,  97 => 35,  89 => 30,  85 => 29,  80 => 27,  74 => 24,  70 => 22,  63 => 18,  61 => 17,  56 => 13,  46 => 11,  42 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-payment" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-payment" class="form-horizontal">*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*             <li><a href="#tab-status" data-toggle="tab">{{ tab_order_status }}</a></li>*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-general">*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="entry-email">{{ entry_email }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="payment_pp_standard_email" value="{{ payment_pp_standard_email }}" placeholder="{{ entry_email }}" id="entry-email" class="form-control"/>*/
/*                   {% if error_email %}*/
/*                   <div class="text-danger">{{ error_email }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-live-demo"><span data-toggle="tooltip" title="{{ help_test }}">{{ entry_test }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pp_standard_test" id="input-live-demo" class="form-control">*/
/*                     {% if payment_pp_standard_test %}*/
/*                     <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                     <option value="0">{{ text_no }}</option>*/
/*                     {% else %}*/
/*                     <option value="1">{{ text_yes }}</option>*/
/*                     <option value="0" selected="selected">{{ text_no }}</option>*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-debug"><span data-toggle="tooltip" title="{{ help_debug }}">{{ entry_debug }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pp_standard_debug" id="input-debug" class="form-control">*/
/*                     {% if payment_pp_standard_debug %}*/
/*                     <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                     <option value="0">{{ text_disabled }}</option>*/
/*                     {% else %}*/
/*                     <option value="1">{{ text_enabled }}</option>*/
/*                     <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-transaction">{{ entry_transaction }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pp_standard_transaction" id="input-transaction" class="form-control">*/
/*                     {% if not payment_pp_standard_transaction %}*/
/*                     <option value="0" selected="selected">{{ text_authorization }}</option>*/
/*                     {% else %}*/
/*                     <option value="0">{{ text_authorization }}</option>*/
/*                     {% endif %}*/
/*                     {% if payment_pp_standard_transaction %}*/
/*                     <option value="1" selected="selected">{{ text_sale }}</option>*/
/*                     {% else %}*/
/*                     <option value="1">{{ text_sale }}</option>*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-total"><span data-toggle="tooltip" title="{{ help_total }}">{{ entry_total }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="payment_pp_standard_total" value="{{ payment_pp_standard_total }}" placeholder="{{ entry_total }}" id="input-total" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-geo-zone">{{ entry_geo_zone }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pp_standard_geo_zone_id" id="input-geo-zone" class="form-control">*/
/*                     <option value="0">{{ text_all_zones }}</option>*/
/*                     {% for geo_zone in geo_zones %}*/
/*                     {% if geo_zone.geo_zone_id == payment_pp_standard_geo_zone_id %}*/
/*                     <option value="{{ geo_zone.geo_zone_id }}" selected="selected">{{ geo_zone.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ geo_zone.geo_zone_id }}">{{ geo_zone.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pp_standard_status" id="input-status" class="form-control">*/
/*                     {% if payment_pp_standard_status %}*/
/*                     <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                     <option value="0">{{ text_disabled }}</option>*/
/*                     {% else %}*/
/*                     <option value="1">{{ text_enabled }}</option>*/
/*                     <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="payment_pp_standard_sort_order" value="{{ payment_pp_standard_sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-status">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-canceled-reversal-status">{{ entry_canceled_reversal_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pp_standard_canceled_reversal_status_id" id="input-canceled-reversal-status" class="form-control">*/
/*                     {% for order_status in order_statuses %}*/
/*                     {% if order_status.order_status_id == payment_pp_standard_canceled_reversal_status_id %}*/
/*                     <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-completed-status">{{ entry_completed_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pp_standard_completed_status_id" id="input-completed-status" class="form-control">*/
/*                     {% for order_status in order_statuses %}*/
/*                     {% if order_status.order_status_id == payment_pp_standard_completed_status_id %}*/
/*                     <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-denied-status">{{ entry_denied_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pp_standard_denied_status_id" id="input-denied-status" class="form-control">*/
/*                     {% for order_status in order_statuses %}*/
/*                     {% if order_status.order_status_id == payment_pp_standard_denied_status_id %}*/
/*                     <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-expired-status">{{ entry_expired_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pp_standard_expired_status_id" id="input-expired-status" class="form-control">*/
/*                     {% for order_status in order_statuses %}*/
/*                     {% if order_status.order_status_id == payment_pp_standard_expired_status_id %}*/
/*                     <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-failed-status">{{ entry_failed_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pp_standard_failed_status_id" id="input-failed-status" class="form-control">*/
/*                     {% for order_status in order_statuses %}*/
/*                     {% if order_status.order_status_id == payment_pp_standard_failed_status_id %}*/
/*                     <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-pending-status">{{ entry_pending_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pp_standard_pending_status_id" id="input-pending-status" class="form-control">*/
/*                     {% for order_status in order_statuses %}*/
/*                     {% if order_status.order_status_id == payment_pp_standard_pending_status_id %}*/
/*                     <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-processed-status">{{ entry_processed_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pp_standard_processed_status_id" id="input-processed-status" class="form-control">*/
/*                     {% for order_status in order_statuses %}*/
/*                     {% if order_status.order_status_id == payment_pp_standard_processed_status_id %}*/
/*                     <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-refunded-status">{{ entry_refunded_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pp_standard_refunded_status_id" id="input-refunded-status" class="form-control">*/
/*                     {% for order_status in order_statuses %}*/
/*                     {% if order_status.order_status_id == payment_pp_standard_refunded_status_id %}*/
/*                     <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-reversed-status">{{ entry_reversed_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pp_standard_reversed_status_id" id="input-reversed-status" class="form-control">*/
/*                     {% for order_status in order_statuses %}*/
/*                     {% if order_status.order_status_id == payment_pp_standard_reversed_status_id %}*/
/*                     <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-void-status">{{ entry_voided_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pp_standard_voided_status_id" id="input-void-status" class="form-control">*/
/*                     {% for order_status in order_statuses %}*/
/*                     {% if order_status.order_status_id == payment_pp_standard_voided_status_id %}*/
/*                     <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
