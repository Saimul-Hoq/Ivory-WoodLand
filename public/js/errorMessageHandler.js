//Function for showing error messages:
export function setFieldError(id, msg, prefix){
    let errorId = prefix + id + "-error";
    let fieldId = prefix + id;
    const errorEl = document.querySelector(`#${errorId}`);
    const fieldEl = document.querySelector(`#${fieldId}`);

    if(errorEl) errorEl.textContent = msg;
    if(fieldEl) fieldEl.classList.toggle("input-error", Boolean(msg));
}

export function clearAllErrors(ids, prefix){
    ids.forEach(id => setFieldError(id, "", prefix));
}
