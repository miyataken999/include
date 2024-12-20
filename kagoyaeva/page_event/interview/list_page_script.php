<style>
    .bs-grid.bs-grid {
        width: auto;
    }

    td.rnr-field-text[data-field="title"] span,
    td.rnr-field-text[data-field="writer_comment"] span,
    td.rnr-field-text[data-field="customer_comment"] span,
    td.rnr-field-text[data-field="interviewer_comment"] span,
    td.rnr-field-text[data-field="description"] span {
        display: block;
        /* max-height: 150px; */
        /* overflow-y: scroll; */
        /* width: 200px; */
        min-width: 300px;
    }
</style>

<script>
    $(document).on("focusout", "td[data-field='h2'] textarea", function() {
        let h2 = $(this).val()
        let h2_for_index_area = $(this).parents(".bs-gridcell[data-field='h2']").siblings(".bs-gridcell[data-field='h2_for_index']").find("textarea")
        if (h2_for_index_area.val() == "") {
            h2_for_index_area.val(h2)
        }
        let h2_for_pagelink_area = $(this).parents(".bs-gridcell[data-field='h2']").siblings(".bs-gridcell[data-field='h2_for_pagelink']").find("textarea")
        if (h2_for_pagelink_area.val() == "") {
            h2_for_pagelink_area.val(h2)
        }
    })
</script>