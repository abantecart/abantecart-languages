<?php
/** @see install.php for $combinedReplaces */
$replaces = $combinedReplaces['stock_status_descriptions'];
foreach ($replaces['descriptions'] as $descKey => $descItem) {
    $id = $this->db->query(
        "SELECT `stock_status_id` 
        FROM {$replaces['parent_table']} 
        WHERE `name` = '{$this->db->escape($descKey)}' AND language_id=1"
    )->row['stock_status_id'] ?? null;
    if ($id !== null) {
        $this->db->query(
            "INSERT INTO {$replaces['descriptions_table']} 
                (`stock_status_id`, `language_id`, `name`)
            VALUES (
                    {$id}, 
                    {$newLanguageId}, 
                    '{$this->db->escape($descItem['name'])}'                    
            )"
        );
    }
}

$replaces = $combinedReplaces['length_class_descriptions'];
foreach ($replaces['descriptions'] as $descKey => $descItem) {
    $id = $this->db->query(
        "SELECT `length_class_id` 
        FROM {$replaces['parent_table']} 
        WHERE `iso_code` = '{$descKey}'"
    )->row['length_class_id'] ?? null;
    if ($id !== null) {
        $this->db->query(
            "INSERT INTO {$replaces['descriptions_table']} (`length_class_id`, `language_id`, `title`, `unit`)
            VALUES (
                    {$id}, 
                    {$newLanguageId}, 
                    '{$this->db->escape($descItem['title'])}', 
                    '{$this->db->escape($descItem['unit'])}'
            )"
        );
    }
}

$replaces = $combinedReplaces['weight_class_descriptions'];
foreach ($replaces['descriptions'] as $descKey => $descItem) {
    $id = $this->db->query(
        "SELECT `weight_class_id` 
        FROM {$replaces['parent_table']} 
        WHERE `iso_code` = '{$descKey}'"
    )->row['weight_class_id'] ?? null;
    if ($id !== null) {
        $this->db->query(
            "INSERT INTO {$replaces['descriptions_table']} 
                (`weight_class_id`, `language_id`, `title`, `unit`)
            VALUES (
                    {$id}, 
                    {$newLanguageId}, 
                    '{$this->db->escape($descItem['title'])}', 
                    '{$this->db->escape($descItem['unit'])}'
                    )"
        );
    }
}

$replaces = $combinedReplaces['order_statuses'];
foreach ($replaces['descriptions'] as $descKey => $descItem) {
    $id = $this->db->query(
        "SELECT `order_status_id` 
        FROM {$replaces['parent_table']} 
        WHERE `status_text_id` = '{$descKey}'"
    )->row['order_status_id'] ?? null;
    if ($id !== null) {
        $this->db->query(
            "INSERT INTO {$replaces['descriptions_table']} 
                (`order_status_id`, `language_id`, `name`)
            VALUES ({$id}, {$newLanguageId}, '{$this->db->escape($descItem['name'])}')"
        );
    }
}

$replaces = $combinedReplaces['page_descriptions'];
foreach ($replaces['descriptions'] as $descKey => $descItem) {
    list($controller,$keyParam,$keyValue) = explode('~', $descKey);
    $id = $this->db->query(
        "SELECT `page_id` 
         FROM {$replaces['parent_table']} 
         WHERE `controller` = '{$controller}' 
           AND `key_param` = '{$keyParam}' 
           AND `key_value` = '{$keyValue}'"
    )->row['page_id'] ?? null;
    if ($id !== null) {
        $this->db->query(
            "INSERT INTO {$replaces['descriptions_table']} 
            (`page_id`, `language_id`, `name`, `title`, `keywords`, `description`, `content`)
            VALUES (
                    {$id}, 
                    {$newLanguageId}, 
                    '{$this->db->escape($descItem['name'])}', 
                    '{$this->db->escape($descItem['title'])}', 
                    '{$this->db->escape($descItem['keywords'])}', 
                    '{$this->db->escape($descItem['description'])}', 
                    '{$this->db->escape($descItem['content'])}'
                    )"
        );
    }
}

$replaces = $combinedReplaces['global_attributes_type_descriptions'];
foreach ($replaces['descriptions'] as $descKey => $descItem) {
    $id = $this->db->query(
        "SELECT `attribute_type_id` 
         FROM {$replaces['parent_table']} 
         WHERE `type_key` = '{$descKey}'"
    )->row['attribute_type_id'] ?? null;
    if ($id !== null) {
        $this->db->query(
            "INSERT INTO {$replaces['descriptions_table']} 
            (`attribute_type_id`, `language_id`, `type_name`)
            VALUES (
                {$id}, 
                {$newLanguageId}, 
                '{$this->db->escape($descItem['type_name'])}'
            )"
        );
    }
}

$replaces = $combinedReplaces['form_descriptions'];
$formMap = []; 
foreach ($replaces['descriptions'] as $descKey => $descItem) {
    $formId = $this->db->query(
        "SELECT `form_id` 
         FROM {$replaces['parent_table']} 
         WHERE `form_name` = '{$descKey}'"
    )->row['form_id'] ?? null;

    if ($formId !== null) {
        $formMap[$descKey] = $formId;
        $this->db->query(
            "INSERT INTO {$replaces['descriptions_table']} 
            (`form_id`, `language_id`, `description`)
            VALUES (
                {$formId}, 
                {$newLanguageId}, 
                '{$this->db->escape($descItem['description'])}'
            )"
        );
    }
}

$replaces = $combinedReplaces['field_descriptions'];
foreach ($replaces['descriptions'] as $descKey => $descItem) {
    list($formName,$fieldName) = explode('~', $descKey);
    $formId = $formMap[$formName];
    if ($formId !== null) {
        $fieldId = $this->db->query(
            "SELECT `field_id` 
             FROM {$replaces['fields_table']} 
             WHERE `field_name` = '{$fieldName}' AND `form_id` = {$formId}"
        )->row['field_id'] ?? null;
        if ($fieldId !== null) {
            $this->db->query(
                "INSERT INTO {$replaces['field_descriptions_table']} 
                (`field_id`, `name`, `description`, `language_id`, `error_text`)
                VALUES (
                    {$fieldId}, 
                    '{$this->db->escape($descItem['name'])}', 
                    '{$this->db->escape($descItem['description'])}',
                    {$newLanguageId}, 
                    '{$this->db->escape($descItem['error_text'])}'
                )"
            );
        }
    }
}
