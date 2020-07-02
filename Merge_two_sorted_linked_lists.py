

def appendList(lList, head):
    node = head;
    final_list = lList;
    while node:
        final_list.insert_node(node.data)
        node = node.next

    return final_list;


def mergeLists(head1, head2):
    merged_list = SinglyLinkedList();
    l1 = head1;
    l2 = head2;
    while 1:
        if l1 is None and l2 is None:
            break;
        elif l1 is None:
            merged_list = appendList(merged_list, l2);
            break;
        elif l2 is None:
            merged_list = appendList(merged_list, l1);
            break;
        elif l1.data < l2.data:
            next_data = l1.data;
            l1 = l1.next;
        elif l2.data < l1.data:
            next_data = l2.data;
            l2 = l2.next
        else:
            next_data = l1.data;
            l1 = l1.next;
        
        merged_list.insert_node(next_data)

    return merged_list.head;
    