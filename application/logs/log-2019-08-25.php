<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-08-25 20:47:48 --> Query error: Table 'ci_roles_permissions.ci_payments' doesn't exist - Invalid query: SELECT `ci_payments`.`id`, `ci_payments`.`invoice_no`, `ci_users`.`username` as `client_name`, `ci_payments`.`payment_status`, `ci_payments`.`grand_total`, `ci_payments`.`currency`, `ci_payments`.`due_date`
FROM `ci_payments`
LEFT JOIN `ci_users` ON `ci_users`.`id` = `ci_payments`.`user_id`
ERROR - 2019-08-25 20:48:14 --> Query error: Table 'ci_roles_permissions.ci_payments' doesn't exist - Invalid query: SELECT `ci_payments`.`id`, `ci_payments`.`invoice_no`, `ci_users`.`username` as `client_name`, `ci_payments`.`payment_status`, `ci_payments`.`grand_total`, `ci_payments`.`currency`, `ci_payments`.`due_date`
FROM `ci_payments`
LEFT JOIN `ci_users` ON `ci_users`.`id` = `ci_payments`.`user_id`
