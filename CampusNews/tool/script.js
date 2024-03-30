function execCmd(command) {
    document.execCommand(command, false, null);
}

function execCmdWithArg(command, arg) {
    document.execCommand(command, false, arg);
}
