using UnityEngine;
using System.Collections;
using UnityEngine.UI;

public class plaquetext : MonoBehaviour {
	public Text plaque;

	// Use this for initialization
	void Start () {
		plaque.text = menuscript.nickname;
	
	}
	
	// Update is called once per frame
	void Update () {
	
	}
}
