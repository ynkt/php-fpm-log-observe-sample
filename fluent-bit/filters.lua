function append_backtrace(tag, timestamp, record)
    local msg = record["raw_log"]
    if not msg then
        return 0, timestamp, record
    end

    local stack_obj = {}
    local i = 0
    for line in msg:gmatch("%[0x[^\n]+\n") do
        local frame = line:match("%]%s*(.-)%s*$")
        if frame then
        local key = "#" .. tostring(i)
        stack_obj[key] = frame
        i = i + 1
        end
    end
    record["backtrace"] = stack_obj

    return 2, timestamp, record
end
